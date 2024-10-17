<div class="col-md-3">
    <div class="product-card">
        <a href="#">
            <div class="text-center position-relative">
                <img src="{{ asset($product->image ?? '') }}" alt="{{ $product->name ?? '' }}" class="product-image">
                <span class="discount-badge">Giảm 600.000₫</span>
            </div>
            <h6 class="product-title">{{ $product->name ?? '' }}</h6>
            <div class="d-flex align-items-end font-size-14">
                <p class="product-price mr-2">15.390.000₫</p>
                <p class="original-price price-js--vi" data-amount="{{ $product->price_original ?? '' }}">{{ $product->price_original ?? '' }}</p>
            </div>
            <x-star-rating rating="3" reviewCount="15" />
        </a>
    </div>
</div>
