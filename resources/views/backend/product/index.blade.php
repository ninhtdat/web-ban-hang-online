@extends('backend/layout')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>
    <h2>Danh sách sản phẩm</h2>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('product.create') }}"> Add product</a>
    </div>
    {{-- <div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">hình ảnh</th>
        <th scope="col">tên</th>
        <th scope="col">loại</th>
        <th scope="col">giá gốc</th>
        <th scope="col">giá bán</th>
        <th scope="col">thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($product as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->sp_ten }}</td>
        <td>{{ $product->sp_hinh }}</td>
        <td>{{ $product->sp_giaGoc }}</td>
        <td>{{ $product->sp_giaBan }}</td>
        <td>{{ $product->l_ma }}</td>
        <td>
          <form action="{{ route('product.destroy',$product->id) }}" method="Post">
            <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col" style="max-width: 20%;" >hình ảnh</th>
                                <th scope="col">tên</th>
                                <th scope="col">loại</th>
                                <th scope="col">số lượng</th>
                                <th scope="col">giá gốc (vnd)</th>
                                <th scope="col">giá bán (vnd)</th>
                                <th scope="col">mô tả</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    {{-- <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-list" /> --}}
                                    {{-- src="{{ asset('backend/img/admin.jpg') }} --}}
                                    {{-- <td>{{ $product->image }}</td> --}}
                                    {{-- <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-list" /> --}}
                                    {{-- src="{{ asset('backend/img/admin.jpg') }} --}}
                                    <td>
                                        <div class="card h-100">
                                            <!-- Product image-->
                                            <img class="card-img" src="{{ asset('img/blog-03.jpg') }}"  width="160" height="115" alt="...">
                                            
                                        </div>
                                        {{-- <img class="card-img-top " style="vertical-align: middle;" src="{{ asset('img/blog-03.jpg') }}"/> --}}
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->type->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->cost }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="Post">
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-info btn-circle">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
