@extends('layouts.user.master-layout')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/user/cart.css') }}">
@endpush
@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <a href="#" class="text-decoration-none">
                        <span class="text-danger">&#8592;</span> Mua thêm sản phẩm khác
                    </a>
                    
                    <h5 class="mb-0">GIỎ HÀNG CỦA BẠN</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-4">
                                <img src="/placeholder.svg?height=80&width=80" alt="Xiaomi Redmi Note 14 Pro 5G"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-7 col-8">
                                <h6 class="card-title">Xiaomi Redmi Note 14 Pro 5G</h6>
                                <p class="card-text mb-1">Màu: Tím</p>
                                <p class="card-text mb-1">Khu vực: Hà Nội</p>
                                <a href="#" class="text-decoration-none text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                    Xóa
                                </a>
                            </div>
                            <div class="col-md-3 col-12 mt-3 mt-md-0">
                                <h5 class="text-danger text-end">10.380.000đ</h5>
                                <div class="input-group justify-content-end mt-2">
                                    <button class="btn btn-outline-secondary btn-quantity" type="button">-</button>
                                    <input type="text" class="form-control quantity-input" value="2" readonly>
                                    <button class="btn btn-outline-secondary btn-quantity" type="button">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Chọn hình thức thanh toán</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery" checked>
                            <label class="form-check-label" for="cashOnDelivery">
                                Trả tiền mặt
                            </label>
                            <p class="text-muted small mb-0">Thanh toán khi nhận hàng</p>
                        </div>
                    </div>
                </div>
                <div class="form-container mb-4">
                    <h2 class="form-title">THÔNG TIN KHÁCH HÀNG</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Họ tên *" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Điện thoại *" required>
                            </div>
                        </div>
                        <input type="email" class="form-control" placeholder="Email *" required>
                        <input type="text" class="form-control" placeholder="Lưu ý hoặc yêu cầu trước khi giao hàng">
                        <textarea class="form-control" rows="3" placeholder="Địa chỉ nhận hàng *" required></textarea>
                        <button type="submit" class="btn btn-order btn-block w-100">
                            ĐẶT HÀNG
                            <br>
                            <small>Hotline: 0815.208.208 (8h - 21h)</small>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tạm tính (2 sản phẩm):</span>
                            <span class="text-danger">10.380.000đ</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Thanh toán:</span>
                            <span class="text-danger fw-bold">10.380.000đ</span>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger" type="button">Trả tiền mặt</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
