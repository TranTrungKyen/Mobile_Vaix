@foreach ($products as $item)
    <x-product-card :product="$item"/>
@endforeach

{{ $products->links('layouts.user.pagination') }}