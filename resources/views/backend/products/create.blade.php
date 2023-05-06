@extends('backend/layout')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sanpham.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tên sản phẩm:</strong>
                    <input type="text" name="name" class="form-control" placeholder="quần short nam">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Link hình ảnh:</strong>
                    <input type="text" name="picture" class="form-control" placeholder="images/product-01.jpg">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Giá gốc:</strong>
                    <input type="text" name="giagoc" class="form-control" placeholder="100000">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>giá bán:</strong>
                <div class="form-group">
                    <input type="text" name="giaban" class="form-control" placeholder="150000">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Loại:</strong>
                <select class="form-select" name="loai" aria-label="Default select example">
                    <option selected>Loại sản phẩm</option>
                    <option value="1">thời trang nam</option>
                    <option value="2">thời trang nữ</option>
                    <option value="3">giày</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>

@endsection