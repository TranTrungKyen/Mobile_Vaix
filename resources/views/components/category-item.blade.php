<a href="{{ route('product.get-by-condition') . '?category_id=' . $id }}" class="list-group-item list-group-item-action menu-item category-item-js">
    <span class="menu-icon"><i class="{{ $icon }}"></i></span>
    <span class="menu-text">{{ $text }}</span>
    <span class="chevron float-right"><i class="fas fa-chevron-right"></i></span>
</a>