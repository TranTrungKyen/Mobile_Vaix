@extends('layouts.user.master-layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/user/product/detail.css') }}">
@endpush
@section('content')
    <section class="container">
        <div class="d-flex py-3">
            <h1 class="font-size-24 mb-0">iPhone 14 Pro Max chính hãng VN/A</h1>
            <div class="d-flex align-items-center">
                <p class="mb-0 mx-3">
                    Giá tốt nhất, số lượng có hạn
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
                            Realme GT Neo6 - Cam kết máy mới 100% Fullbox đầy đủ phụ kiện, chưa qua sử dụng, chỉ bóc seal để
                            unlock SIM dùng ổn định. Bộ sản phẩm chuẩn của máy bao gồm vỏ hộp ngoài, thân máy, củ sạc, dây
                            sạc, que chọc sim, sách HDSD và ốp lưng tặng kèm. Duy nhất tại Dienthoaihay.vn sản phẩm được bảo
                            hành VIP toàn diện cả nguồn, màn hình, vân tay.
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
                                        <td>Nano + eSim</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kiểu thiết kế:</th>
                                        <td>2 mặt kính, khung thép</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Màn hình:</th>
                                        <td>6.7 inches, LTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 2000 nits</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Độ phân giải:</th>
                                        <td>1290 x 2796 pixels, tỷ lệ 19.5:9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CPU:</th>
                                        <td>Apple A16 Bionic (4 nm)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">RAM:</th>
                                        <td>6GB</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bộ nhớ/ Thẻ nhớ:</th>
                                        <td>128/256/512GB/1TB</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Camera sau:</th>
                                        <td>48 MP, f/1.8, 24mm (wide), 12 MP, 12 MP</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Camera trước:</th>
                                        <td>12 MP, f/1.9, 23mm (wide)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jack 3.5mm/ Loa:</th>
                                        <td>Không/ Loa kép Stereo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pin:</th>
                                        <td>4323mAh, sạc nhanh 27W</td>
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
