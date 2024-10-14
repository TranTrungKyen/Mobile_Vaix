<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryItem extends Component
{
    public $icon;

    public $text;

    public $link;

    public function __construct($icon, $text, $link = '#')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-item');
    }
}
