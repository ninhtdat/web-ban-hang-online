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
                                    <input type="text" name="name" class="form-control" placeholder="quần short nam"
                                        required minlength="1" maxlength="20">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="card-body">
                                    <strong>loại*</strong>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"
                                        name="type">
                                        {{-- <option selected>Choose...</option> --}}

                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>số lượng*</strong>
                                        <input type="text" name="quantity" class="form-control" placeholder="0" required
                                            minlength="1" maxlength="5" pattern="[0-9]+">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>mô tả sản phẩm</strong>
                                    <textarea type="text" name="description" class="form-control" rows="5" placeholder="" maxlength="200"></textarea>
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
                                        <input id="image" type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá gốc (vnd)*</strong>
                                        <input type="text" name="cost" class="form-control" placeholder="1000"
                                            required minlength="1" maxlength="8" pattern="[0-9]+">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>giá bán (vnd)*</strong>
                                        <input type="text" name="price" class="form-control" placeholder="100000"
                                            required minlength="1" maxlength="8" pattern="[0-9]+">
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
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
