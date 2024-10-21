<?php

namespace App\View\Components;

use App\Services\Contracts\ProductServiceInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductSales extends Component
{
    public $service;

    /**
     * Create a new component instance.
     */
    public function __construct(ProductServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = $this->service->getProductSalesLimit16();

        return view('components.product-sales', compact('products'));
    }
}
