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
                                    <div class="d-flex">
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
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                @if (method_exists($products, 'links'))
                    {{ $products->links('pagination') }}
                @endif

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
