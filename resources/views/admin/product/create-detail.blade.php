@extends('layouts.admin.master-layout')
@push('style')
    <!-- Custom form product detail css -->
    <link rel="stylesheet" href="{{ asset('css/admin/product/create-detail.css') }}">
@endpush
@section('content')
    @php
        $namePage = isset($product) ? 'edit' : 'create';
        $isUpdateDetailPage = isset($product) ? true : false;
    @endphp
    <div class="container">
        <div class="page-inner">
            <div class="page-header justify-content-between">
                <h3 class="fw-bold mb-3">{{ __('content.common.page.header.product_detail')[$namePage] }}</h3>
                <ul class="breadcrumbs mb-3 float-end">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}">Quản lý sản phẩm</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ $isUpdateDetailPage ? route('admin.product.create', ['id' => $product->id]) : route('admin.product.create') }}">
                            {{ __('content.common.page.header.product')[$namePage] }}
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ __('content.common.page.card_title.product_detail')[$namePage] }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{ __('content.common.page.card_title.product_detail')[$namePage] }}
                            </div>
                        </div>
                        <form id="product-details-form" method="post"
                            action="{{ $isUpdateDetailPage ? route('admin.product.update-detail', ['id' => $product->id]) : route('admin.product.store-detail') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                @if (!$isUpdateDetailPage)
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="color_id">Màu sắc</label>
                                            <span class="text-danger">*</span>
                                            <select class="form-select" name="color_id[]">
                                                <option value="" hidden selected hidden>Chọn màu sắc</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}"
                                                        {{ $color->id == old('color_id.0') ? 'selected' : '' }}>
                                                        {{ $color->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('color_id.0'))
                                                <span class="text-danger">
                                                    {{ $errors->first('color_id.0') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="storage_id">Dung lượng</label>
                                            <span class="text-danger">*</span>
                                            <select class="form-select" name="storage_id[]">
                                                <option value="" hidden selected hidden>Chọn dung lượng</option>
                                                @foreach ($storages as $storage)
                                                    <option value="{{ $storage->id }}"
                                                        {{ $storage->id == old('storage_id') ? 'selected' : '' }}>
                                                        {{ $storage->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('storage_id.0'))
                                                <span class="text-danger">
                                                    {{ $errors->first('storage_id.0') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="qty">Số lượng</label>
                                            <span class="text-danger">*</span>
                                            <input type="number" class="form-control" name="qty[]">
                                            @if ($errors->has('qty.0'))
                                                <span class="text-danger">
                                                    {{ $errors->first('qty.0') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="price">Giá</label>
                                            <span class="text-danger">*</span>
                                            <input type="number" class="form-control" name="price[]">
                                            @if ($errors->has('price.0'))
                                                <span class="text-danger">
                                                    {{ $errors->first('price.0') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group d-flex align-items-end h-100">
                                            <div class="btn btn-danger btn-remove">
                                                <i class="fa-solid fa-trash"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @foreach ($product->productDetails ?? [] as $item)
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="product_detail_id[]"
                                                    value="{{ $item->id }}" hidden>
                                                <label for="color_id">Màu sắc</label>
                                                <span class="text-danger">*</span>
                                                <select class="form-select" name="color_id[]" disabled>
                                                    <option value="" hidden selected hidden>Chọn màu sắc</option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}"
                                                            {{ $color->id == $item->color_id ? 'selected' : '' }}>
                                                            {{ $color->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="storage_id">Dung lượng</label>
                                                <span class="text-danger">*</span>
                                                <select class="form-select" name="storage_id[]" disabled>
                                                    <option value="" hidden selected hidden>Chọn dung lượng
                                                    </option>
                                                    @foreach ($storages as $storage)
                                                        <option value="{{ $storage->id }}"
                                                            {{ $storage->id == $item->storage_id ? 'selected' : '' }}>
                                                            {{ $storage->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('storage_id.0'))
                                                    <span class="text-danger">
                                                        {{ $errors->first('storage_id.0') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="qty">Số lượng</label>
                                                <span class="text-danger">*</span>
                                                <input type="number" class="form-control" name="qty[]"
                                                    value="{{ $item->quantity }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="price">Giá</label>
                                                <span class="text-danger">*</span>
                                                <input type="number" class="form-control" name="price[]"
                                                    value="{{ $item->price }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group d-flex align-items-end h-100">
                                                <div class="btn btn-danger btn-remove product-detail-old" data-id="{{ $item->id }}" data-type="normal">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="btn btn-xxl add-product-detail-js">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="upload__box">
                                                <div class="upload__btn-box">
                                                    <label class="upload__btn">
                                                        <p class="text-white mb-0">Thêm ảnh</p>
                                                        <input id="product-images" type="file" multiple=""
                                                            data-max_length="{{ MAX_QTY_IMAGE_PRODUCT - $product?->images->count() }}" class="upload__inputfile"
                                                            name="product_images[]">
                                                    </label>
                                                </div>
                                                <div class="upload__img-wrap">
                                                    @foreach ($product->images ?? [] as $item)
                                                        <div class="upload__img-box">
                                                            <div class="img-bg"
                                                                style="background-image: url({{ asset($item->url) }})">
                                                                <div class="upload__img-close product-detail-old" data-type="image" data-id="{{ $item->id }}"></div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit"
                                    class="btn btn-primary">{{ $isUpdateDetailPage ? __('content.common.button.update') : __('content.common.button.add') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const colors = @json($colors);
        const storages = @json($storages);
        const errors = @json($errors);
    </script>
    <script src="{{ asset('js/admin/product/create-product-detail.js') }}"></script>
@endpush
