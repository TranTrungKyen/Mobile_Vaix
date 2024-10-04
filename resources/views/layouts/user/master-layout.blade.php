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

    @stack('styles')
</head>

<body>
    <div id="app" class="bg-light">
        @include('layouts.user.header')
        @include('layouts.user.category')
        @include('layouts.user.banner')

        @yield('content')

        {{-- @include('layouts.user.rating') --}}
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
