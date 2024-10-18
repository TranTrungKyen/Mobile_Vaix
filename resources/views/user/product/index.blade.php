@extends('layouts.user.master-layout')
@section('content')
    @php
        $isEmptyProducts = ($products->count() <= 0) ? true : false;
    @endphp
    <section class="container content bg-white my-3 p-3">
        <div class="row {{ $isEmptyProducts ? '' : 'd-none' }}">
            <h3 class="col text-center">
                Không có sản phẩm
            </h3>
        </div>
        <div class="row mb-4 {{ !$isEmptyProducts ? '' : 'd-none' }}">
            <div class="col-8">
                <h1 class="font-size-24 mb-0">{{ $products->first()?->category->name }}</h1>
            </div>
            <div class="col-4">
                <form class="filter-product-form-js" action="{{ route('product.get-by-condition') }}" method="GET">
                    @csrf
                    <select class="form-select float-right" aria-label="Default select example" name="sort_name">
                        <option value="" selected>Tên</option>
                        <option value="asc">A -> Z</option>
                        <option value="desc">Z -> A</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="list-product-js row">
            <x-product-list :products="$products" />
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('js/product.js') }}"></script>
@endpush
