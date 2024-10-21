{{-- Product sales --}}
<section class="container mt-3">
    <div class="promo-banner">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <span class="hot-label">HOT!</span>
                <h1 class="promo-title text-white">ÔI RẺ QUÁ!</h1>
            </div>
            <div class="brand-links">
                <a class="mr-2 ml-3" href="{{ route('product.get-by-condition') . '?category_id=1' }}">IPHONE</a>
                <span class="separate"></span>
                <a class="mr-2 ml-3" href="{{ route('product.get-by-condition') . '?category_id=4' }}">XIAOMI</a>
                <span class="separate"></span>
                <a class="mr-2 ml-3" href="{{ route('product.get-by-condition') . '?category_id=5' }}">SAMSUNG</a>
                <span class="separate"></span>
                <a class="mr-0 ml-3" href="{{ route('product.get-by-condition') . '?category_id=6' }}">REALME</a>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active">
                    <div class="row">
                        @for ($i = 0; $i < $products->count(); $i++)
                            @if ($i > 7)
                                @break;
                            @endif
                        <x-product-card :product="$products[$i]"/>
                        @endfor
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @for ($i = 8; $i < $products->count(); $i++)
                        <x-product-card :product="$products[$i]"/>
                        @endfor
                    </div>
                </div>
            </div>
            <button class="carousel-control py-2 next-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <button class="carousel-control py-2 prev-btn">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </div>
    </div>
</section>
{{-- Product sales end --}}