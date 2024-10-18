<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSaleCreateRequest;
use App\Services\Contracts\ProductDetailServiceInterface;
use App\Services\Contracts\SaleServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SaleController extends Controller
{
    protected $service;

    protected $productDetailService;

    public function __construct(
        ProductDetailServiceInterface $productDetailService,
        SaleServiceInterface $service
    ) {
        $this->service = $service;
        $this->productDetailService = $productDetailService;
    }

    public function index()
    {
        $sales = $this->service->all();

        return view('admin.sale.index', ['sales' => $sales]);
    }

    public function create()
    {
        $productDetails = $this->productDetailService->all();

        return view('admin.sale.create', ['productDetails' => $productDetails]);
    }

    public function find(Request $request)
    {
        $notification = [
            'status' => false,
            'message' => __('content.common.notify_message.error.find'),
        ];

        try {
            $productDetails = $this->productDetailService->getListProductDetailByName($request->name);
            $notification = [
                'status' => true,
                'message' => __('content.common.notify_message.success.find'),
                'productDetails' => $productDetails,
            ];
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        return response()->json($notification);
    }

    public function store(AdminSaleCreateRequest $request)
    {
        $notification = [
            'status' => false,
            'message' => __('content.common.notify_message.error.add'),
        ];
        DB::beginTransaction();
        try {
            $saleId = $this->service->store($request);
            $isStoreSuccess = $this->service->storeProductDetailSale($request, $saleId);
            DB::commit();
            if ($isStoreSuccess) {
                $notification = [
                    'status' => true,
                    'redirectRoute' => route('admin.sale.index'),
                    'message' => __('content.common.notify_message.success.add'),
                ];
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
        }

        return response()->json($notification);
    }

    public function delete($id)
    {
        try {
            $this->service->delete($id);
        } catch (\Exception $e) {
            Log::info($e->getMessage());

            return redirect()->route('admin.sale.index')->with('error', __('content.common.notify_message.error.delete'));
        }

        return redirect()->route('admin.sale.index')->with('success', __('content.common.notify_message.success.delete'));
    }

    public function detail($id)
    {
        $sale = $this->service->find($id);

        return view('admin.sale.detail', ['sale' => $sale]);
    }
}
