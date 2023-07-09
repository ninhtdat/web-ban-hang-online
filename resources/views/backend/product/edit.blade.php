@extends('backend/layout')

@section('content')
    <div class="card shadow ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cập nhật sản phẩm</h6>
        </div>

        <div class="card-body">

            <div class="container mt-2">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Quay lại</a>

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
                                        <option selected value="{{ $product->product_type_id }}">{{ $product->type->name }}
                                        </option>

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
                                        <input type="text" name="quantity" value="{{ $product->quantity }}"
                                            class="form-control" placeholder="0">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>mô tả sản phẩm</strong>
                                    {{-- <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder=""> --}}
                                    <textarea type="text" name="description" value="{{ $product->description }}" class="form-control" rows="5"
                                        placeholder="" maxlength="200">{{ $product->description }}</textarea>

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
                                        <input type="text" name="cost" class="form-control" placeholder="1000"
                                            value="{{ $product->cost }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá bán (vnd)*</strong>
                                        <input type="text" name="price" class="form-control" placeholder="100000"
                                            value="{{ $product->price }}">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ml-3">Cập nhật</button>
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
