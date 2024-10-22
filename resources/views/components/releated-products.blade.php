<div class="col-md-3">
    <div class="card">
        <div class="recommendation-header">
            Có thể bạn quan tâm
        </div>
        <div class="card-body p-0">
            @foreach ($products as $product)
            <div class="product-item">
                <img src="{{ asset($product->image ?? IMAGE['DEFAULT']) }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-details">
                    <div class="product-name">{{ $product->name }}</div>
                    @if (!empty($product->price_current))
                    <div class="d-flex flex-column">
                        <p class="old-price price-js--vi mb-0" data-amount="{{ $product->price_original }}"></p>
                        <div class="product-price price-js--vi mb-0 mr-2" data-amount="{{ $product->price_current }}"></div>
                        
                    </div>
                    @else
                        <div class="product-price price-js--vi" data-amount="{{ $product->price_original }}"></div>
                    @endif
                    <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="view-details">Xem chi tiết</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>