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
                    <x-category-list/>
                </div>
                <div id="banner-center-js" class="col-md-6">
                    {{-- Banner --}}
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
                    {{-- Banner end --}}
                    {{-- Product by banner --}}
                    <ul class="list-group d-flex flex-row mt-3">
                        <li class="list-group-item border-right-0 font-size-14 flex-grow-1 cursor-pointer h-100" data-target="#carouselExampleControls" data-slide-to="0">
                            Redmi note 13 5G NFC sieu re
                        </li>
                        <span class="separate"></span>
                        <li class="list-group-item border-right-0 font-size-14 flex-grow-1 cursor-pointer h-100" data-target="#carouselExampleControls" data-slide-to="1">
                            Redmi note 12 5G NFC sieu re
                        </li>
                    </ul>
                    {{-- Product by banner end --}}
                </div>
                {{-- Banner left --}}
                <div class="col-md-3">
                    <div class="banner-items d-flex align-items-end flex-column">
                        <img src="{{ asset('images/note-11-pro-5g.jpg') }}" class="w-100 rounded" alt="banner-2">
                        <img src="{{ asset('images/redmi-note-11t-pro-plus.jpg') }}" class="w-100 mt-2 rounded"
                            alt="banner-1">
                        <img src="{{ asset('images/redmi-note-12.jpg') }}" class="w-100 mt-2 rounded" alt="banner-3">
                    </div>
                </div>
                {{-- Banner left end --}}
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
                    <a
                        href = {{ route('product.get-by-condition') . '?category_id=4' }}
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang4.png') }}" alt="hang 4">
                    </a>
                </div>
                <div class="col-md-3">
                    <a
                        href = {{ route('product.get-by-condition') . '?category_id=6' }}
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang3.png') }}" alt="hang 3">
                    </a>
                </div>
                <div class="col-md-3">
                    <a
                        href = {{ route('product.get-by-condition') . '?category_id=5' }}
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang2.png') }}" alt="hang 2">
                    </a>
                </div>
                <div class="col-md-3">
                    <a
                        href = {{ route('product.get-by-condition') . '?category_id=1' }}
                        class="brand-image-item bg-white d-flex justify-content-center align-items-center rounded overflow-hidden py-2">
                        <img class="w-100" src="{{ asset('images/hang1.png') }}" alt="hang 1">
                    </a>
                </div>
            </div>
        </section>
        {{-- Brand images end --}}

        {{-- Product sales --}}
        <x-product-sales />
        {{-- Product sales end --}}

        {{-- Product featured --}}
        <x-products-feature :image="asset('images/xiaomi.png')" nameCategory="Xiaomi nổi bật" categoryId="4" />
        <x-products-feature :image="asset('images/realme.png')" nameCategory="Realme nổi bật" categoryId="5"/>
        {{-- Product featured end --}}
        {{-- Purchasing advice --}}
        {{-- <section class="container py-5">
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
        </section> --}}
        {{-- Purchasing advice end --}}
        {{-- @include('layouts.user.review-talk') --}}
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

    <script>
        var lang = @json(__('content'));
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/common-front.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
