<?php

namespace App\View\Components;

use App\Services\Contracts\CategoryServiceInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryList extends Component
{
    private $service;

    /**
     * Create a new component instance.
     */
    public function __construct(CategoryServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = $this->service->all();

        return view('components.category-list', compact('categories'));
    }
}
