<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a 
            {{-- href="{{ route('admin.dashboard') }}" --}}
             class="logo">
                <h2 class="text-white mb-0">KMobile</h2>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.dashboard') }}" --}}
                    >
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Tổng quan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.user.index') }}" --}}
                    >
                        <i class="fas fa-users"></i>
                        <p>Quản lý người dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.product.index') }}" --}}
                    >
                        <i class="fas fa-box-open"></i>
                        <p>Quản lý sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a 
                    {{-- href="{{ route('admin.brand.index') }}" --}}
                    >
                        <i class="fas fa-warehouse"></i>
                        <p>Quản lý hãng</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a 
                    {{-- href="{{ route('admin.category.index') }}" --}}
                    >
                        <i class="fas fa-list-alt"></i>
                        <p>Quản lý danh mục</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.order.index') }}" --}}
                    >
                        <i class="fas fa-file-invoice"></i>
                        <p>Quản lý đơn hàng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.news.index') }}" --}}
                    >
                        <i class="fas fa-newspaper"></i>
                        <p>Quản lý tin tức</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.sale.index') }}" --}}
                    >
                        <i class="fas fa-tags"></i>
                        <p>Quản lý khuyến mại</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.color.index') }}" --}}
                    >
                        <i class="fas fa-palette"></i>
                        <p>Quản lý màu sắc</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.storage.index') }}" --}}
                    >
                        <i class="fas fa-hdd"></i>
                        <p>Quản lý dung lượng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    {{-- href="{{ route('admin.statistical.index') }}" --}}
                    >
                        <i class="fas fa-chart-bar"></i>
                        <p>Thống kê</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
