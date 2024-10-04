<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StarRating extends Component
{
    public $rating;
    public $reviewCount;
    /**
     * Create a new component instance.
     */
    public function __construct($rating, $reviewCount)
    {
        $this->rating = $rating;
        $this->reviewCount = $reviewCount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.star-rating');
    }
}
