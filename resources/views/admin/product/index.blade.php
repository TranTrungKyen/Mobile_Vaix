@extends('layouts.admin.master-layout')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <div class="col-6">
                    <h3 class="fw-bold">Quản lý sản phẩm</h3>
                </div>
                <div class="col-6 float-end">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary float-end">Thêm mới</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Danh mục</th>
                                            <th>Hãng</th>
                                            <th>Tiêu đề</th>
                                            <th>Mô tả</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Danh mục</th>
                                            <th>Hãng</th>
                                            <th>Tiêu đề</th>
                                            <th>Mô tả</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($products as $index => $item)
                                            <tr data-id="{{ $item->id }}">
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>{{ $item->brand->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <div class="description">
                                                        {{ $item->description }}
                                                    </div>
                                                </td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn shadow-none"
                                                            href="{{ route('admin.product.detail', ['id' => $item->id] ) }}">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <button type="button" class="btn p-1 shadow-none me-1 toggle-active-js"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            data-name="{{ $item->name }}"
                                                            data-route="{{ route('admin.product.active', ['id' => $item->id]) }}"
                                                            data-active="{{ $item->active }}">
                                                            @php
                                                                $iconActive = __('content.common.icon')[
                                                                    $item->active ? 'lock' : 'unlock'
                                                                ];
                                                            @endphp
                                                            <i class="{{ $iconActive }}"></i>
                                                        </button>
                                                        <button class="btn shadow-none toggle-delete-js" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"
                                                            data-name="{{ $item->name }}"
                                                            data-route="{{ route('admin.product.delete', ['id' => $item->id]) }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </div>  
                                                </td>
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
        <!-- Modal -->
        <div id="container-modal">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="#" method="post">
                            @csrf
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Chắc chắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/admin/product/list-product.js') }}"></script>
@endpush
