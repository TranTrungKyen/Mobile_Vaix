@extends('layouts.admin.master-layout')
@push('style')
    <link href="{{ asset('css/admin/product/detail.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header justify-content-between">
                <h3 class="fw-bold mb-3">Chi tiết</h3>
                <ul class="breadcrumbs mb-3 float-end">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}">Quản lý sản phẩm</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Chi tiết</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Chi tiết sản phẩm</div>
                        </div>
                        <div class="card-body">
                            <div class="info-product">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Tên sản phẩm:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Danh mục:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->category->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Tiêu đề phụ:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->sub_title }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Thẻ sim phụ:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->sim_card }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    CPU:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->cpu }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Dung lượng pin:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->pin }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Kiểu thiết kế:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->design_style }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    Độ phân giải:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    {{ $product->screen_resolution }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p>
                                                    Mô tả:
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p class="description line-clamp-4">{!! nl2br(e($product->description)) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-images">
                                <div class="container mx-0">
                                    <p class="card-title mb-2">Ảnh sản phẩm</p>
                                <div class="row row-cols-4 row-cols-md-6 g-4">
                                    @foreach ($product->images as $item)
                                        <div class="col">
                                            <img src="{{ asset($item->url) }}" class="img-fluid"
                                                alt="Image {{ $item->id }}">
                                        </div>
                                    @endforeach
                                    @if (count($product->images) == 0)
                                        <p> Chưa có ảnh nào </p>
                                    @endif
                                </div>
                            </div>
                            <div class="product-details mt-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Loại sản phẩm</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="basic-datatables" class="display table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Màu sắc</th>
                                                        <th>Dung lượng</th>
                                                        <th>Số lượng còn</th>
                                                        <th>Giá</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Màu sắc</th>
                                                        <th>Dung lượng</th>
                                                        <th>Số lượng còn</th>
                                                        <th>Giá</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($product->productDetails as $index => $item)
                                                        <tr>
                                                            <td>{{ ++$index }}</td>
                                                            <td>{{ $item->color->name }}</td>
                                                            <td>{{ $item->storage->name }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                            <td class="price-js--vi" data-amount="{{ $item->price }}">
                                                                {{ $item->price }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/admin/product/detail.js') }}"></script>
@endpush
