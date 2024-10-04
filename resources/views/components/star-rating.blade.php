<div class="star-rating">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $rating)
            <i class="fas fa-star"></i> 
        @else
            <i class="far fa-star"></i> 
        @endif
    @endfor
    <span class="ml-2">{{ $reviewCount }} đánh giá</span>
</div>