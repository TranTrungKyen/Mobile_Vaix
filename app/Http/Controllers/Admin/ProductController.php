<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreProductDetailRequest;
use App\Http\Requests\AdminStoreProductRequest;
use App\Http\Requests\AdminUpdateProductDetailRequest;
use App\Http\Requests\AdminUpdateProductRequest;
use App\Services\Contracts\CategoryServiceInterface;
use App\Services\Contracts\ColorServiceInterface;
use App\Services\Contracts\ImageServiceInterface;
use App\Services\Contracts\ProductDetailServiceInterface;
use App\Services\Contracts\ProductServiceInterface;
use App\Services\Web\StorageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    protected $imageService;

    protected $colorService;

    protected $productService;

    protected $storageService;

    protected $categoryService;

    protected $productDetailService;

    public function __construct(
        StorageService $storageService,
        ImageServiceInterface $imageService,
        ColorServiceInterface $colorService,
        ProductServiceInterface $productService,
        CategoryServiceInterface $categoryService,
        ProductDetailServiceInterface $productDetailService,
    ) {
        $this->imageService = $imageService;
        $this->colorService = $colorService;
        $this->storageService = $storageService;
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->productDetailService = $productDetailService;
    }

    public function index()
    {
        return view('admin.product.index');
    }

    public function listDetail()
    {
        return view('admin.product.list-detail');
    }

    public function getDataDetail()
    {
        $relationship = ['product', 'color', 'storage'];
        $productDetails = $this->productDetailService->all($relationship);

        return DataTables::of($productDetails)
            ->editColumn('product.updated_at', function ($row) {
                return formatDate('d/m/Y', $row->updated_at);
            })
            ->addColumn('actions', function ($row) {
                return '<div class="d-flex">
                            <a class="btn shadow-none"
                                href="' . route('admin.product.detail', ['id' => $row->product_id]) . '">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn shadow-none"
                                href="' . route('admin.product.create', ['id' => $row->product_id]) . '">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button class="btn shadow-none toggle-delete-js" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-name="' . $row->product?->name . '"
                                data-route="' . route('admin.product.delete', ['id' => $row->product_id]) . '">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function getData()
    {
        $relationship = ['category'];
        $products = $this->productService->all($relationship);

        return DataTables::of($products)
            ->editColumn('updated_at', function ($row) {
                return formatDate('d/m/Y', $row->updated_at);
            })
            ->addColumn('actions', function ($row) {
                return '<div class="d-flex">
                            <a class="btn shadow-none"
                                href="' . route('admin.product.detail', ['id' => $row->id]) . '">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn shadow-none"
                                href="' . route('admin.product.create', ['id' => $row->id]) . '">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button class="btn shadow-none toggle-delete-js" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-name="' . $row->name . '"
                                data-route="' . route('admin.product.delete', ['id' => $row->id]) . '">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create($id = null)
    {
        $product = $this->productService->find($id);
        $categories = $this->categoryService->all();

        return view('admin.product.create', compact('product', 'categories'));
    }

    public function store(AdminStoreProductRequest $request)
    {
        $request->session()->put('productForm', $request->all());

        return redirect()->route('admin.product.create-detail');
    }

    public function createDetail($id = null)
    {
        $product = $this->productService->find($id);
        $colors = $this->colorService->all();
        $storages = $this->storageService->all();

        return view('admin.product.create-detail', compact('product', 'colors', 'storages'));
    }

    public function storeDetail(AdminStoreProductDetailRequest $request)
    {
        $notification = [
            'status' => false,
            'message' => __('content.common.notify_message.error.add'),
        ];
        DB::beginTransaction();
        try {
            $requestProductForm = $request->session()->get('productForm');
            $productId = $this->productService->store($requestProductForm)->id;
            $isStoreDetailsSuccess = $this->productDetailService->storeMultiple($request, $productId);
            $isStoreImagesSuccess = $this->imageService->storeMultiple($request, $productId);
            DB::commit();
            if ($productId && $isStoreDetailsSuccess && $isStoreImagesSuccess) {
                $notification = [
                    'status' => true,
                    'redirectRoute' => route('admin.product.index'),
                    'message' => __('content.common.notify_message.success.add'),
                ];
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
        }

        return response()->json($notification);
    }

    public function detail($id)
    {
        $product = $this->productService->find($id);

        return view('admin.product.detail', ['product' => $product]);
    }

    public function delete($id)
    {
        $notification = [
            'status' => false,
            'message' => __('content.common.notify_message.error.delete'),
        ];
        try {
            $this->productService->delete($id);
            $notification = [
                'status' => true,
                'message' => __('content.common.notify_message.success.delete'),
            ];
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        return response()->json($notification);
    }

    public function update(AdminUpdateProductRequest $request, $id)
    {
        try {
            $this->productService->update($request, $id);
        } catch (\Exception $e) {
            Log::info($e->getMessage());

            return redirect()->route('admin.product.create', ['id' => $id])->with('error', __('content.common.notify_message.error.update'));
        }

        return redirect()->route('admin.product.create-detail', ['id' => $id])->with('success', __('content.common.notify_message.success.update'));
    }

    public function updateDetail(AdminUpdateProductDetailRequest $request, $id)
    {
        $notification = [
            'status' => false,
            'message' => __('content.common.notify_message.error.update'),
        ];
        DB::beginTransaction();
        try {
            // Delete product details
            if (!empty($request->productDetailDeletedIds)) {
                foreach ($request->productDetailDeletedIds as $productDetailId) {
                    $this->productDetailService->delete($productDetailId);
                }
            }

            // Delete product images
            if (!empty($request->imgDeletedIds)) {
                $this->imageService->deleteMultiple($request->imgDeletedIds);
            }

            $this->productDetailService->updateOrCreateMultiple($request, $id);

            $this->imageService->storeMultiple($request, $id);
            DB::commit();
            $notification = [
                'status' => true,
                'redirectRoute' => route('admin.product.index'),
                'message' => __('content.common.notify_message.success.update'),
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
        }

        return response()->json($notification);
    }
}
