{{-- @extends('backend/layout')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('product.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>tên sản phẩm:</strong>
                        <input type="text" name="name" value="{{ $product->sp_ten }}" class="form-control"
                            placeholder="">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Link hình ảnh:</strong>
                        <input type="text" name="picture" value="{{ $product->sp_hi }}" class="form-control"
                            placeholder="images/product-01.jpg">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Giá gốc:</strong>
                        <input type="text" name="giagoc" value="{{ $product->sp_giaGoc }}" class="form-control"
                            placeholder="100000">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>giá bán:</strong>
                    <div class="form-group">
                        <input type="text" name="giaban" value="{{ $product->sp_giaBan }}" class="form-control"
                            placeholder="150000">
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
@endsection --}}

@extends('backend/layout')
@section('content')
    <div class="card shadow ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit product</h6>
        </div>

        <div class="card-body">

            <div class="container mt-2">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>

                <div class="card-body">
                    <div class="card shadow mb-4">
                        <form action="{{ route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>tên sản phẩm*</strong>
                                    <input type="text" name="name" class="form-control" value="{{ $product->name }}"
                                        placeholder="quần short nam" required minlength="1" maxlength="20">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="card-body">
                                    <strong>loại*</strong>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"
                                        name="type">
                                        <option selected value="{{ $product->product_type_id}}" >{{ $product->type->name }}</option>

                                        @foreach ($types as $type)
                                            @if ($type->id != $product->product_type_id)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>số lượng*</strong>
                                        <input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control" placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>mô tả sản phẩm</strong>
                                    <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="file-loading">
                                        <label>hình ảnh*</label>
                                        <input id="image" type="file" name="image" value="{{ $product->image }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá gốc (vnd)*</strong>
                                        <input type="text" name="cost" class="form-control" placeholder="1000" value="{{ $product->cost }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá bán (vnd)*</strong>
                                        <input type="text" name="price" class="form-control" placeholder="100000" value="{{ $product->price }}">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
