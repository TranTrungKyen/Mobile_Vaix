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
                            <div class="carousel-item active">
                                <img class="w-100" src="{{ asset('images/product-detail.png') }}" alt="mobile">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="{{ asset('images/product-detail.png') }}" alt="mobile">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="{{ asset('images/product-detail.png') }}" alt="mobile">
                            </div>
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
                    <div class="d-flex">
                        <h2 class="price mb-0 mr-2">7.190.000đ</h2>
                        <p class="text-primary-custom font-weight-bold mb-0 d-flex align-items-end mr-3">(Màu Tím)</p>
                        <p class="old-price mb-0 d-flex align-items-end">9.690.000đ</p>
                    </div>
                    <p class="availability mb-2">
                        <strong>Tình trạng:</strong> Còn hàng <span class="text-success">✓</span>
                    </p>
                    <div class="mb-3">
                        <strong>Bộ nhớ:</strong><br>
                        <button class="option-button active">12GB / 256GB<br>7.190.000đ</button>
                        <button class="option-button">16GB / 256GB<br>8.490.000đ</button>
                        <button class="option-button">16GB / 512GB<br>9.490.000đ</button>
                    </div>

                    <div>
                        <strong>Chọn màu:</strong><br>
                        <button class="option-button active">
                            <span class="color-option">
                                <img class="w-100" src="{{ asset('images/small-product.jpg') }}" alt="small">
                            </span>
                            Tim
                            <br>7.190.000đ
                        </button>
                        <button class="option-button">
                            <span class="color-option">
                                <img class="w-100" src="{{ asset('images/small-product.jpg') }}" alt="small">
                            </span>
                            Xanh
                            <br>7.190.000đ
                        </button>
                        <button class="option-button">
                            <span class="color-option">
                                <img class="w-100" src="{{ asset('images/small-product.jpg') }}" alt="small">
                            </span>
                            Trắng
                            <br>7.190.000đ
                        </button>
                    </div>

                    <div class="d-flex mt-4">
                        <button class="btn btn-buy-now btn-block mr-2">
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
                <div class="col-md-3">
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
                </div>
                {{-- Related products end --}}

                {{-- SPECIFICATIONS --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="specs-header">
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
                                        <th scope="row">Màn hình:</th>
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
                </div>
                {{-- SPECIFICATIONS end --}}
                {{-- Video product --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            VIDEO SẢN PHẨM
                        </div>
                        <div class="card-body p-0">
                            <div class="video-container">
                                <img src="{{ asset('images/hqdefault.jpg') }}" alt="video" class="w-100">
                            </div>
                            <div class="row no-gutters mt-3">
                                <div class="col-6 pr-1">
                                    <div class="thumbnail-container">
                                        <img src="{{ asset('images/hqdefault_1.jpg') }}" alt="Thumbnail 1" class="img-fluid">
                                        <div class="thumbnail-overlay">GIẢM CHƯA TỪNG CÓ</div>
                                    </div>
                                </div>
                                <div class="col-6 pr-1">
                                    <div class="thumbnail-container">
                                        <img src="{{ asset('images/hqdefault_1.jpg') }}" alt="Thumbnail 1" class="img-fluid">
                                        <div class="thumbnail-overlay">GIẢM CHƯA TỪNG CÓ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Video product end --}}
            </div>
            {{-- Product detail end --}}
    </section>
@endsection
