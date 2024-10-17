<header class="bg-primary-custom pt-2 pb-2">
    <div class="container">
        <div class="row">
            <h1 class="col-2 mb-0">
                <a href="{{ route('home') }}" class="logo_img text-white d-flex flex-column">
                    <img class="img" src="{{ asset('images/logo-dth.png') }}" alt="logo">
                    <span class="font-size-12 phone">0815.208.208 | 0818.215.215</span>
                </a>
            </h1>
            <div class="address_search d-flex col-6 algin-items-center">
                <div class="address d-flex flex-column">
                    <label for="address" class="mb-0 text-white font-size-12">Cơ sở tại</label>
                    <select name="address" id="address" class="font-size-12">
                        <option value="1">Hà Nội</option>
                        <option value="2">Hồ Chí Minh</option>
                    </select>
                </div>
                <form method="GET" action="{{ route('product.get-by-condition') }}" class="search bg-white rounded overflow-hidden d-flex align-items-center ml-4 w-100 px-2">
                    @csrf
                    <input type="text" name="name" class="search__input border-0 h-100 outline-none w-100" placeholder="Tìm kiếm tên sản phẩm" value="{{ request('name') }}"> 
                    <button class="border-0 bg-white">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="header-left-icons d-flex col-4 justify-content-around">
                <div class="header-left-icons__item d-flex">
                    <div class="icon rounded-circle bg-white d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-phone text-primary-custom font-size-18"></i>
                    </div>
                    <div class="content text-white ml-2">
                        <div class="font-size-12">Bán hàng</div>
                        <div class="font-size-16">Online</div>
                    </div>
                </div>
                <div class="header-left-icons__item d-flex">
                    <div class="icon rounded-circle bg-white d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-check text-primary-custom font-size-18"></i>
                    </div>
                    <div class="content text-white ml-2">
                        <div class="font-size-12">Tra cứu</div>
                        <div class="font-size-16">Sản phẩm</div>
                    </div>
                </div>
                <div class="header-left-icons__item d-none">
                    <div class="icon rounded-circle bg-white d-flex justify-content-center align-items-center position-relative">
                        <i class="fa-solid fa-cart-shopping text-primary-custom font-size-18"></i>
                        <span class="cart-quantity bg-white text-primary-custom rounded-circle d-flex align-items-center justify-content-center font-size-12">0</span>
                    </div>
                    <div class="content text-white ml-2 d-flex align-items-center">
                        <div class="font-size-16">Giỏ hàng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>