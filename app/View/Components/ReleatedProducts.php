<?php

namespace App\View\Components;

use App\Services\Contracts\ProductServiceInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReleatedProducts extends Component
{
    private $service;

    public $categoryId;

    /**
     * Create a new component instance.
     */
    public function __construct(ProductServiceInterface $service, $categoryId)
    {
        $this->categoryId = $categoryId;
        $this->service = $service;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = $this->service->findByField('category_id', $this->categoryId)->take(4);

        return view('components.releated-products', compact('products'));
    }
}
