@extends('layouts.user.master-layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/user/product/detail.css') }}">
@endpush
@section('content')
    <section class="container">
        <div class="d-flex py-3">
            <h1 class="font-size-24 mb-0">{{ $product->name ?? 'Ten' }}</h1>
            <div class="d-flex align-items-center">
                <p class="mb-0 mx-3">
                    {{ $product->sub_title ?? 'Tieu de phu' }}
                </p>
                <x-star-rating rating="3" reviewCount="15" />
            </div>
        </div>

        {{-- Product detail --}}
        <div class="bg-white px-2 py-3">
            <div class="row">
                <div class="col-md-3">
                    <div id="productImageControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($product->images as $key => $item)
                                <div class="carousel-item {{ ($key != 0) ? '' : 'active' }}">
                                    <img class="w-100" src="{{ asset($item->url ?? IMAGE['DEFAULT']) }}" alt="image {{ $key }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#productImageControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#productImageControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <div class="product-desc">
                        <h5 class="bg-primary-custom text-center rounded text-white py-2">Mô tả sản phẩm</h5>
                        <p class="product-desc__content font-size-12">
                            {!! nl2br(e($product->description)) !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex product-detail-price-js">
                        @if (empty($product->price_current))
                            <h2 class="price mb-0 mr-2 price-js--vi" data-amount="{{ $product->price_original }}"></h2>
                        @else
                            <h2 class="price mb-0 mr-2 price-js--vi" data-amount="{{ $product->price_current }}"></h2>
                            <p class="old-price mb-0 d-flex align-items-end price-js--vi" data-amount="{{ $product->price_original }}"></p>
                        @endif
                    </div>
                    <div class="my-3">
                        <x-input-storage :product="$product" />
                    </div>

                    {{-- Color --}}
                    <div class="d-flex mb-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text col-md-2" for="color">Màu sắc: </label>
                            <select class="form-select col-md-5 border-primary" disabled="" id="color">
                                <option value="" selected="">Chọn màu sắc</option>
                            </select>
                        </div>
                    </div>
                    {{-- Color end --}}

                    <div class="card">
                        <div class="specs-header text-center">
                            THÔNG SỐ KỸ THUẬT
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-bordered table-specs mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Thẻ SIM:</th>
                                        <td>{{ $product->sim_card }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kiểu thiết kế:</th>
                                        <td>{{ $product->design_style }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Độ phân giải:</th>
                                        <td>{{ $product->screen_resolution ?? 'man hinh' }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CPU:</th>
                                        <td>{{ $product->cpu ?? 'CPU' }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pin:</th>
                                        <td>{{ $product->pin ?? 'Pin' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex mt-4">
                        <button id="fileDownload" class="btn btn-buy-now btn-block mr-2" data-link-download="https://drive.google.com/uc?export=download&id=1mFsTxZI9FZf4zXnUcp06F0btYEodaLqU">
                            <p class="mb-0">
                                MUA NGAY
                            </p>
                            <span class="sub-text">Giao tận nhà (COD) hoặc nhận tại cửa hàng</span>
                        </button>
                        <button class="btn btn-cart float-right d-flex align-items-center">
                            <p class="mb-0">
                                Thêm vào giỏ hàng
                            </p>
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>

                {{-- Related products --}}
                <x-releated-products :categoryId="$product->category_id"/>
                {{-- <div class="col-md-3">
                    <div class="card">
                        <div class="recommendation-header">
                            Có thể bạn quan tâm
                        </div>
                        <div class="card-body p-0">
                            <div class="product-item">
                                <img src="{{ asset('images/xiaomi-13.jpg') }}" alt="Xiaomi 13 5G" class="product-image">
                                <div class="product-details">
                                    <div class="product-name">Xiaomi 13 5G</div>
                                    <div class="product-price">9.050.000đ</div>
                                    <a href="#" class="view-details">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{ asset('images/xiaomi-13.jpg') }}" alt="Xiaomi 13 5G" class="product-image">
                                <div class="product-details">
                                    <div class="product-name">Xiaomi 13 5G</div>
                                    <div class="product-price">9.050.000đ</div>
                                    <a href="#" class="view-details">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <img src="{{ asset('images/xiaomi-13.jpg') }}" alt="Xiaomi 13 5G" class="product-image">
                                <div class="product-details">
                                    <div class="product-name">Xiaomi 13 5G</div>
                                    <div class="product-price">9.050.000đ</div>
                                    <a href="#" class="view-details">Xem chi tiết</a>
                                </div>
                            </div>
                            <div class="product-item border-bottom-0">
                                <img src="{{ asset('images/xiaomi-13.jpg') }}" alt="Xiaomi 13 5G" class="product-image">
                                <div class="product-details">
                                    <div class="product-name">Xiaomi 13 5G</div>
                                    <div class="product-price">9.050.000đ</div>
                                    <a href="#" class="view-details">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- Product detail end --}}
    </section>
@endsection
@push('scripts')
    <script>
        const productDetailValues = @json($product->productDetails);
    </script>
    <script src="{{ asset('js/product-detail.js') }}"></script>
@endpush
