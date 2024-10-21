<section class="container py-5">
    <div class="title-review-talk rounded position-relative">
        <span class="icon-cat-menu">
            <img class="w-50" src="{{ $image }}" alt="{{ $nameCategory }}">
        </span>
        <p class="mb-0 text-white font-weight-bold font-size-24">{{ $nameCategory }}</p>
    </div>
    <div class="row mt-4">
        @foreach ($products as $item)
            <x-product-card :product="$item"/>
        @endforeach
    </div>
</section>