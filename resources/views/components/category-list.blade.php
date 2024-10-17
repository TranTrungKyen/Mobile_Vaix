<nav class="list-group font-size-14">
    @foreach ($categories as $key => $item)
        <x-category-item :icon="CATEGORY_ICONS[$key]" :text="$item->name" :link="route('product.index', ['id' => $item->id])"></x-category-item>
    @endforeach
</nav>