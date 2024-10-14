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
    <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
</head>

<body>
    <div id="app" class="bg-light">
        @include('layouts.user.header')

        {{-- category and slider --}}
        <section class="container my-3">
            <div class="row">
                <div class="col-md-3">
                    <nav class="list-group font-size-14">
                        <x-category-item icon="fas fa-mobile-alt" text="IPhone" link="#"></x-category-item>
                        <x-category-item icon="fas fa-tablet-alt" text="iPad" link="#"></x-category-item>
                        <x-category-item icon="fas fa-mobile-alt" text="Apple Watch" link="#"></x-category-item>
                        <x-category-item icon="fas fa-mobile-alt" text="Xiaomi" link="#"></x-category-item>
                        <x-category-item icon="fas fa-mobile-alt" text="Samsung" link="#"></x-category-item>
                        <x-category-item icon="fas fa-mobile-alt" text="Realme" link="#"></x-category-item>
                        <x-category-item icon="fas fa-mobile-alt" text="VSmart" link="#"></x-category-item>
                        <x-category-item icon="fa fa-gamepad" text="Phụ kiện - Đồ chơi" link="#"></x-category-item>
                        <x-category-item icon="fa-solid fa-newspaper" text="Tin tức" link="#"></x-category-item>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/redmi-note-13-13-pro-5g.jpg') }}" class="d-block w-100"
                                    alt="neo-5">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/redmi-note-12-turbo.jpg') }}" class="d-block w-100"
                                    alt="neo-5-se">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <ul class="list-group d-flex flex-row mt-3">
                        <li class="list-group-item border-right-0 font-size-14">
                            Redmi 12 5G NFC sieu re
                        </li>
                        <span class="separate"></span>
                        <li class="list-group-item border-right-0 font-size-14">
                            Redmi 12 5G NFC sieu re
                        </li>
                        <span class="separate"></span>
                        <li class="list-group-item border-right-0 font-size-14">
                            Redmi 12 5G NFC sieu re
                        </li>
                        <span class="separate"></span>
                        <li class="list-group-item font-size-14">
                            Redmi 12 5G NFC sieu re
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="banner-items d-flex align-items-end flex-column">
                        <img src="{{ asset('images/note-11-pro-5g.jpg') }}" class="w-100 rounded" alt="banner-2">
                        <img src="{{ asset('images/redmi-note-11t-pro-plus.jpg') }}" class="w-100 mt-2 rounded"
                            alt="banner-1">
                        <img src="{{ asset('images/redmi-note-12.jpg') }}" class="w-100 mt-2 rounded" alt="banner-3">
                    </div>
                </div>
            </div>
        </section>
        {{-- category and slider end --}}

        {{-- banner --}}
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="w-100 rounded" src="{{ asset('images/dienthoaihaypng.png') }}" alt="banner-full">
                </div>
            </div>
        </section>
        {{-- banner end --}}

        {{-- Brand images --}}
        <section class="container mt-3">
            <div class="row">
                <div class="col-md-3">
                    <div
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang4.png') }}" alt="hang 4">
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang3.png') }}" alt="hang 3">
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang2.png') }}" alt="hang 2">
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang1.png') }}" alt="hang 1">
                    </div>
                </div>
            </div>
        </section>
        {{-- Brand images end --}}

        {{-- Product sales --}}
        <section class="container mt-3">
            <div class="promo-banner">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <span class="hot-label">HOT!</span>
                        <h1 class="promo-title text-white">ÔI RẺ QUÁ!</h1>
                    </div>
                    <div class="brand-links">
                        <a class="mr-2 ml-3" href="#">IPHONE</a>
                        <span class="separate"></span>
                        <a class="mr-2 ml-3" href="#">XIAOMI</a>
                        <span class="separate"></span>
                        <a class="mr-2 ml-3" href="#">SAMSUNG</a>
                        <span class="separate"></span>
                        <a class="mr-0 ml-3" href="#">REALME</a>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner position-relative">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <x-product-card :product="[]"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control py-2 next-btn">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <button class="carousel-control py-2 prev-btn">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                </div>
            </div>
        </section>
        {{-- Product sales end --}}

        {{-- Product featured --}}
        {{-- Xiaomi --}}
        <section class="container py-5">
            <div class="title-review-talk rounded position-relative">
                <span class="icon-cat-menu">
                    <img class="w-50" src="{{ asset('images/xiaomi.png') }}" alt="hang 4">
                </span>
                <p class="mb-0 text-white font-weight-bold font-size-24">Xiaomi nổi bật</p>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
            </div>
        </section>
        {{-- Xiaomi end--}}
        {{-- Realme --}}
        <section class="container py-5">
            <div class="title-review-talk rounded position-relative">
                <span class="icon-cat-menu">
                    <img class="w-50" src="{{ asset('images/realme.png') }}" alt="hang 4">
                </span>
                <p class="mb-0 text-white font-weight-bold font-size-24">Realme nổi bật</p>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
                <div class="col-md-3">
                    <x-product-card :product="[]"/>
                </div>
            </div>
        </section>
        {{-- Realme end--}}
        {{-- Product featured end --}}
        {{-- Purchasing advice --}}
        <section class="container py-5">
            <div class="title-review-talk rounded position-relative">
                <span class="icon-cat-menu icon-cat-menu--rating"></span>
                <p class="mb-0 text-white font-weight-bold">Tư vấn mua hàng ?</p>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card-text bg-secondary-custom rounded p-2">
                        <img src="https://dienthoaihay.vn/images/testimonials/2021/12/26/large/1_1640490285.jpg" alt="Duong De"
                            class="w-100 rounded">
                        <p class="font-size-12">Mình thấy duy nhất Dienthoaihay.vn tặng gói bảo hành cả nguồn, màn hình, vân tay
                            cho khách mua Xiaomi/ Realme, giúp các bạn mua mặt hàng này yên tâm tuyệt đối về chất lượng mà vẫn
                            tiết kiệm chi phí. Rất uy tín và chuyên nghiệp!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-text bg-secondary-custom rounded p-2">
                        <img src="https://dienthoaihay.vn/images/testimonials/2021/12/26/large/1_1640490285.jpg" alt="Duong De"
                            class="w-100 rounded">
                        <p class="font-size-12">Mình thấy duy nhất Dienthoaihay.vn tặng gói bảo hành cả nguồn, màn hình, vân tay
                            cho khách mua Xiaomi/ Realme, giúp các bạn mua mặt hàng này yên tâm tuyệt đối về chất lượng mà vẫn
                            tiết kiệm chi phí. Rất uy tín và chuyên nghiệp!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-text bg-secondary-custom rounded p-2">
                        <img src="https://dienthoaihay.vn/images/testimonials/2021/12/26/large/1_1640490285.jpg" alt="Duong De"
                            class="w-100 rounded">
                        <p class="font-size-12">Mình thấy duy nhất Dienthoaihay.vn tặng gói bảo hành cả nguồn, màn hình, vân tay
                            cho khách mua Xiaomi/ Realme, giúp các bạn mua mặt hàng này yên tâm tuyệt đối về chất lượng mà vẫn
                            tiết kiệm chi phí. Rất uy tín và chuyên nghiệp!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-text bg-secondary-custom rounded p-2">
                        <img src="https://dienthoaihay.vn/images/testimonials/2021/12/26/large/1_1640490285.jpg" alt="Duong De"
                            class="w-100 rounded">
                        <p class="font-size-12">Mình thấy duy nhất Dienthoaihay.vn tặng gói bảo hành cả nguồn, màn hình, vân tay
                            cho khách mua Xiaomi/ Realme, giúp các bạn mua mặt hàng này yên tâm tuyệt đối về chất lượng mà vẫn
                            tiết kiệm chi phí. Rất uy tín và chuyên nghiệp!</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Purchasing advice end --}}
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
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
