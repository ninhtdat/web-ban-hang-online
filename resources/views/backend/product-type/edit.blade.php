@extends('backend/layout')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Cập nhật loại sản phẩm</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('product-type.index') }}" enctype="multipart/form-data">Quay lại</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('product-type.update', $ProductType->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>tên sản phẩm:</strong>
                        <input type="text" name="name" value="{{ $ProductType->name }}" class="form-control"
                            placeholder="" required minlength="1" maxlength="40">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Cập nhật</button>
            </div>
        </form>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
    </div>
@endsection
