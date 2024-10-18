<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a 
            href="{{ route('admin.dashboard') }}"
             class="logo">
                <h2 class="text-white mb-0">VAIX</h2>
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
                    href="{{ route('admin.dashboard') }}"
                    >
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Tổng quan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    href="{{ route('admin.product.index') }}"
                    >
                        <i class="fas fa-box-open"></i>
                        <p>Quản lý sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                    href="{{ route('admin.sale.index') }}"
                    >
                        <i class="fas fa-box-open"></i>
                        <p>Quản lý khuyến mại</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
