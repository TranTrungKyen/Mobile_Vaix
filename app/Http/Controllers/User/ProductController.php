<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Contracts\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductServiceInterface $service)
    {
        $this->service = $service;
    }

    public function detail()
    {
        return view('user.product.detail');
    }

    public function getByCondition(Request $request)
    {
        $orderBy['updated_at'] = 'desc';
        $condition['name'] = $request->name ?? '';
        if ($request->has('category_id')) {
            $condition['category_id'] = $request->category_id;
        }
        if ($request->has('sort_name') && !empty($request->sort_name)) {
            unset($orderBy);
            $orderBy['name'] = $request->sort_name;
        }
        $filters['filter'] = $condition;
        $products = $this->service->paginateByFilters($filters, orderBy: $orderBy);
        if ($request->ajax()) {
            $htmls = view('components.product-list', compact('products'))->render();

            return response()->json($htmls);
        }

        return view('user.product.index', compact('products'));
    }
}
