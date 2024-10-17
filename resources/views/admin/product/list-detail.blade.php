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
                                <table id="basic-datatables" class="display table table-striped table-hover w-100">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Mã</th>
                                            <th rowspan="2">Tên</th>
                                            <th colspan="2" class="text-center">Màu sắc và dung lượng</th>
                                            <th rowspan="2">Số lượng còn</th>
                                            <th rowspan="2">Giá</th>
                                            <th rowspan="2">Ngày cập nhật</th>
                                            <th rowspan="2">Hành động</th>
                                        </tr>
                                        <tr class="d-none">
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

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
                        <form id="product-form-js" action="#" method="post">
                            @csrf
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-submit">Chắc chắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const routeGetData = @json(route('admin.product.get-data-detail'));
    </script>
    <script src="{{ asset('js/admin/product/list-detail.js') }}"></script>
@endpush
