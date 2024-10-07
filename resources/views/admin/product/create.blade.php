@extends('layouts.admin.master-layout')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header justify-content-between">
                <h3 class="fw-bold mb-3">Thêm mới</h3>
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
                        <a href="#">Thêm mới</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Thêm mới sản phẩm</div>
                        </div>
                        <form id="create-product-form" action="{{ route('admin.product.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Tên sản phẩm</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">
                                                    {{ $errors->first('name') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sub_title">Tiêu đề phụ</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="sub_title" name="sub_title"
                                                placeholder="Nhập tiêu đề" value="{{ old('sub_title') }}">
                                            @if ($errors->has('sub_title'))
                                                <span class="text-danger">
                                                    {{ $errors->first('sub_title') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sim_card">Sim thẻ</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="sim_card" name="sim_card"
                                                placeholder="Nhập sim thẻ" value="{{ old('sim_card') }}">
                                            @if ($errors->has('sim_card'))
                                                <span class="text-danger">
                                                    {{ $errors->first('sim_card') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cpu">CPU</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="cpu" name="cpu"
                                                placeholder="Nhập CPU" value="{{ old('cpu') }}">
                                            @if ($errors->has('cpu'))
                                                <span class="text-danger">
                                                    {{ $errors->first('cpu') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pin">Dung lượng pin</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="pin" name="pin"
                                                placeholder="Nhập dung lượng pin" value="{{ old('pin') }}">
                                            @if ($errors->has('pin'))
                                                <span class="text-danger">
                                                    {{ $errors->first('pin') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="design_style">Kiểu thiết kế</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="design_style" name="design_style"
                                                placeholder="Nhập kiểu thiết kế" value="{{ old('design_style') }}">
                                            @if ($errors->has('design_style'))
                                                <span class="text-danger">
                                                    {{ $errors->first('design_style') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_id">Danh mục</label>
                                            <span class="text-danger">*</span>
                                            <select class="form-select" id="category_id" name="category_id">
                                                <option value="" hidden selected disabled>Chọn danh mục</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <span class="text-danger">
                                                    {{ $errors->first('category_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="screen_resolution">Độ phân giải</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" id="screen_resolution"
                                                name="screen_resolution" placeholder="Nhập độ phân giải"
                                                value="{{ old('screen_resolution') }}">
                                            @if ($errors->has('screen_resolution'))
                                                <span class="text-danger">
                                                    {{ $errors->first('screen_resolution') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Mô tả</label>
                                            <span class="text-danger">*</span>
                                            <textarea name="description" id="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">
                                                    {{ $errors->first('description') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-primary">{{ __('content.common.button.next') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
