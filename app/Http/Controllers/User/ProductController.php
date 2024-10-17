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

    public function index($categoryId)
    {
        $products = $this->service->findByField('category_id', $categoryId);
        return view('user.product.index', compact('products'));
    }

    public function detail()
    {
        return view('user.product.detail');
    }

    public function getByCondition (Request $request) 
    {
        $orderBy['updated_at'] = 'desc';
        $condition['name'] = $request->name ?? '';
        if ($request->has('category_id')) {
            $condition['category_id'] = $request->category_id;
        }
        
        if ($request->has('sort_price') && !empty($request->sort_price)) {
            unset($orderBy);
            $orderBy['price_original'] = $request->sort_price;
        }
        $filters = [
            'filter' => $condition,
        ];
        $products = $this->service->getAllByFilters($filters, orderBy: $orderBy);
        if($request->ajax()) {
            $htmls = view('components.product-list', compact('products'))->render();

            return response()->json($htmls);
        }
        return view('user.product.index', compact('products'));
    }
}
