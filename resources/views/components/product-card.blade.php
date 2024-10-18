@if (!empty($product))
    <div class="col-md-3">
        <div class="product-card">
            <a href="#">
                <div class="text-center position-relative">
                    <img src="{{ asset($product->image ?? '') }}" alt="{{ $product->name ?? '' }}" class="product-image">
                    @if (!empty($product->price_current))
                        <span class="discount-badge {{ empty($product->price_current) ?? d-none }}" >
                            Giảm
                            <span class="price-js--vi" data-amount="{{ $product->price_original -  $product->price_current }}"></span>
                        </span>
                    @endif
                </div>
                <h6 class="product-title">{{ $product->name ?? '' }}</h6>
                <div class="d-flex align-items-end font-size-14">
                    @if (!empty($product->price_current))
                        <p class="product-price price-js--vi mr-2" data-amount="{{ $product->price_current ?? '' }}">{{ $product->price_current ?? '' }}</p>
                        <p class="original-price price-js--vi" data-amount="{{ $product->price_original ?? '' }}">{{ $product->price_original ?? '' }}</p>
                    @else
                        <p class="product-price price-js--vi mr-2" data-amount="{{ $product->price_original ?? '' }}">{{ $product->price_original ?? '' }}</p>
                    @endif
                </div>
                <x-star-rating rating="3" reviewCount="15" />
            </a>
        </div>
    </div>
@endif
