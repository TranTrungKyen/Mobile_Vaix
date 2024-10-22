<div class="input-group">
    <label class="input-group-text col-md-2" for="storage">Bộ nhớ: </label>
    <select class="form-select col-md-5 border-primary outline-primary" id="storage">
        <option value="" selected="">Chọn dung lượng</option>
        @foreach ($product->productDetails->unique('storage_id')->sortBy('storage.name') as $key => $productDetail)
            <option value="{{ $productDetail->storage->id }}">{{ $productDetail->storage->name }}</option>
        @endforeach
    </select>
</div>