@foreach ($products as $item)
    <x-product-card :product="$item"/>
@endforeach