@extends('backend/layout')

@section('content')
    <h2>Hàng tồn kho</h2>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">hình ảnh</th>
                            <th scope="col">tên</th>
                            <th scope="col">loại</th>
                            <th scope="col">số lượng</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <div class="w-50">
                                        <!-- Product image-->
                                        <img src="{{ asset('storage/images/' . $product->image) }}" max-width="100"
                                            height="70" alt="...">
                                    </div>
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->type->name }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    {{-- <div class="d-flex">
                                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                            <i class="bi-cart-fill me-1"></i>
                                            delete
                                        </button>
                                        <input class="form-control text-center me-3" id="inputQuantity" type="num"
                                            value="1" style="max-width: 3rem">
                                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                            <i class="bi-cart-fill me-1"></i>
                                            add
                                        </button>
                                    </div> --}}

                                    <!-- Quantity -->
                                    {{-- <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"> --}}
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary px-3 me-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1"
                                                type="number" class="form-control" />
                                            {{-- <label class="form-label" for="form1">Quantity</label> --}}
                                        </div>

                                        <button class="btn btn-primary px-3 ms-2 mr-5"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-success">Save</button>
                                    </div>
                                    {{-- </div> --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                {{-- @if (method_exists($products, 'links')) --}}
                {{-- {{ $products->links('pagination') }} --}}
                {{-- @endif --}}

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
