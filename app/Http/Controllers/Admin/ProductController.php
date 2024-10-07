<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreProductDetailRequest;
use App\Http\Requests\AdminStoreProductRequest;
use App\Services\Contracts\CategoryServiceInterface;
use App\Services\Contracts\ColorServiceInterface;
use App\Services\Contracts\ImageServiceInterface;
use App\Services\Contracts\ProductDetailServiceInterface;
use App\Services\Contracts\ProductServiceInterface;
use App\Services\Web\StorageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        $products = $this->productService->all();

        return view('admin.product.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = $this->categoryService->all();

        return view('admin.product.create', ['categories' => $categories]);
    }

    public function store(AdminStoreProductRequest $request)
    {
        $request->session()->put('productForm', $request->all());

        return redirect()->route('admin.product.create-detail');
    }

    public function createDetail()
    {
        $colors = $this->colorService->all();
        $storages = $this->storageService->all();

        return view(
            'admin.product.create-detail',
            [
                'colors' => $colors,
                'storages' => $storages,
            ]
        );
    }

    public function storeDetail(AdminStoreProductDetailRequest $request)
    {
        $notification = [
            'status' => false,
            'redrirectRoute' => route('admin.product.create-detail'),
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
                    'redrirectRoute' => route('admin.product.index'),
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
}
