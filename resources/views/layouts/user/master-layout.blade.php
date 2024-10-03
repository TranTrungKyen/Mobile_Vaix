<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dienthoaihay.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="app" class="bg-light">
        @include('layouts.user.header')
        @include('layouts.user.category')
        @include('layouts.user.banner')

        <section class="container content bg-white my-3 p-3">
            <div class="row mb-4">
                <div class="col-8">
                    <h1 class="font-size-24 mb-0">REALME</h1>
                </div>
                <div class="col-2">
                    <div class="dropdown d-flex justify-content-end">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="priceDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Giá
                        </button>
                        <div class="dropdown-menu" aria-labelledby="priceDropdown">
                            <a class="dropdown-item" href="#">Thấp đến cao</a>
                            <a class="dropdown-item" href="#">Cao đến thấp</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="dropdown d-flex justify-content-end">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="sortDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bán chạy nhất
                        </button>
                        <div class="dropdown-menu" aria-labelledby="sortDropdown">
                            <a class="dropdown-item" href="#">Mới nhất</a>
                            <a class="dropdown-item" href="#">Cũ nhất</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-2-4">
                    <div class="product-card">
                        <div class="text-center position-relative">
                            <img src="https://via.placeholder.com/200x300/90EE90/000000?text=realme+GT2+Pro"
                                alt="realme GT2 Pro" class="product-image">
                            <span class="discount-badge">Giảm 600.000₫</span>
                        </div>
                        <h4 class="product-title">realme GT2 Pro</h3>
                            <div class="d-flex align-items-end font-size-14">
                                <p class="product-price mr-2">15.390.000₫</p>
                                <p class="original-price">15.990.000₫</p>
                            </div>
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ml-2">1 đánh giá</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2-4">
                    <div class="product-card">
                        <div class="text-center position-relative">
                            <img src="https://via.placeholder.com/200x300/87CEEB/000000?text=realme+Q2" alt="realme Q2"
                                class="product-image">
                            <span class="discount-badge">Giảm 700.000₫</span>
                        </div>
                        <h4 class="product-title">realme Q2</h3>
                            <div class="d-flex align-items-end font-size-14">
                                <p class="product-price mr-2">15.390.000₫</p>
                                <p class="original-price">15.990.000₫</p>
                            </div>
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ml-2">4 đánh giá</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2-4">
                    <div class="product-card">
                        <div class="text-center position-relative">
                            <img src="https://via.placeholder.com/200x300/FFB6C1/000000?text=realme+Q2+Pro"
                                alt="realme Q2 Pro" class="product-image">
                            <span class="discount-badge">Giảm 640.000₫</span>
                        </div>
                        <h4 class="product-title">realme Q2 Pro</h3>
                            <div class="d-flex align-items-end font-size-14">
                                <p class="product-price mr-2">15.390.000₫</p>
                                <p class="original-price">15.990.000₫</p>
                            </div>
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ml-2">1 đánh giá</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2-4">
                    <div class="product-card">
                        <div class="text-center">
                            <img src="https://via.placeholder.com/200x300/4169E1/FFFFFF?text=realme+Q2i"
                                alt="realme Q2i" class="product-image">
                        </div>
                        <h4 class="product-title">realme Q2i</h3>
                            <p class="product-price">3.490.000₫</p>
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ml-2">1 đánh giá</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2-4">
                    <div class="product-card">
                        <div class="text-center">
                            <img src="https://via.placeholder.com/200x300/8A2BE2/FFFFFF?text=realme+Q"
                                alt="realme Q (realme 5 Pro)" class="product-image">
                        </div>
                        <h4 class="product-title">realme Q (realme 5 Pro)</h4>
                        <p class="product-price">3.690.000₫</p>
                        <div class="star-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-2">2 đánh giá</span>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.user.pagination')
        </section>
        @include('layouts.user.rating')
        @include('layouts.user.review-talk')
        @include('layouts.user.footer')
        @include('layouts.user.social')
        <a href="#" class="contact-button" aria-label="Liên hệ">
            <i class="fas fa-bed contact-icon" aria-hidden="true"></i>
            <span class="contact-text">Liên hệ</span>
        </a>
        <button id="scrollToTop" class="scroll-to-top border-0 text-white" aria-label="Scroll to top">
            <i class="fa-solid fa-chevron-up"></i>
        </button>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/common.js') }}"></script>
</body>

</html>
