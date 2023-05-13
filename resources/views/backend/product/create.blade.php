@extends('backend/layout')
@section('content')
    <div class="card shadow ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add product</h6>
        </div>

        <div class="card-body">

            <div class="container mt-2">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>

                <div class="card-body">
                    <div class="card shadow mb-4">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>tên sản phẩm*</strong>
                                    <input type="text" name="name" class="form-control" placeholder="quần short nam">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="card-body">
                                    <strong>loại*</strong>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"
                                        name="type">
                                        <option selected>Choose...</option>
                                        
                                        @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                
                                    </select>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>số lượng</strong>
                                        <input type="text" name="quantity" class="form-control" placeholder="5">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>mô tả sản phẩm</strong>
                                    <input type="text" name="product_description" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="form-group">
                                    <strong>hình ảnh</strong>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <div class="file-loading">
                                      <label>hình ảnh*</label>
                                      <input id="sp_hinh" type="file" name="sp_hinh">
                                    </div>
                                  </div>
                            </div>
                            <div class="form-row">
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá gốc (vnd)</strong>
                                        <input type="text" name="cost" class="form-control" placeholder="1000">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá bán (vnd)</strong>
                                        <input type="text" name="price" class="form-control" placeholder="100000">
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
    {{-- <div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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
</div> --}}
@endsection
