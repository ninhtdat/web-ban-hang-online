@extends('backend/layout')
@section('content')
    <div class="card shadow ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm loại sản phẩm</h6>
        </div>

        <div class="card-body">

            <div class="container mt-2">
                <a class="btn btn-primary" href="{{ route('product-type.index') }}">Quay lại</a>

                <div class="card-body">
                    <div class="card shadow mb-4">
                        <form action="{{ route('product-type.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>tên loại sản phẩm</strong>
                                    <input type="text" name="name" class="form-control" placeholder="quần short nam"
                                        required minlength="1" maxlength="40">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ml-3">Tạo</button>
                                </div>
                            </div>
                        </form>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
