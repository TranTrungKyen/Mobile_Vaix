@extends('layouts.user.master-layout')
@section('content')
    <section class="container content bg-white my-3 p-3">
        <div class="row mb-4">
            <div class="col-8">
                <h1 class="font-size-24 mb-0">REALME</h1>
            </div>
            <div class="col-2">
                <div class="dropdown d-flex justify-content-end">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="priceDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Giá
                    </button>
                    <div class="dropdown-menu" aria-labelledby="priceDropdown">
                        <a class="dropdown-item" href="#">Thấp đến cao</a>
                        <a class="dropdown-item" href="#">Cao đến thấp</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="dropdown d-flex justify-content-end">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="sortDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bán chạy nhất
                    </button>
                    <div class="dropdown-menu" aria-labelledby="sortDropdown">
                        <a class="dropdown-item" href="#">Mới nhất</a>
                        <a class="dropdown-item" href="#">Cũ nhất</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
            <div class="col-md-3">
                <x-product-card :product="[]"/>
            </div>
        </div>
        @include('layouts.user.pagination')
    </section>
@endsection
