<?php

namespace App\View\Components;

use App\Services\Contracts\ProductServiceInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductsFeature extends Component
{
    public $service;

    public $image;

    public $categoryId;

    public $nameCategory;

    /**
     * Create a new component instance.
     */
    public function __construct($image, $nameCategory, $categoryId, ProductServiceInterface $service)
    {
        $this->image = $image;
        $this->service = $service;
        $this->categoryId = $categoryId;
        $this->nameCategory = $nameCategory;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $condition['category_id'] = $this->categoryId;
        $filters['filter'] = $condition;
        $products = $this->service->getAllByFilters($filters)->take(4);

        return view('components.products-feature', compact('products'));
    }
}
