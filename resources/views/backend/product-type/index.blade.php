@extends('backend/layout')

@section('content')
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div> --}}
    <h2>Danh sách loại sản phẩm</h2>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('product-type.create') }}"> Add product type</a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">tên</th>
                                <th scope="col">thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ProductType as $type)
                                <tr>
                                    <td>{{ $type->id }}</td>
                                    <td>{{ $type->name }}</td>
                                    <td>
                                        <div class="form-row">
                                            <form action="{{ route('product-type.destroy', $type->id) }}" method="Post">

                                                @csrf
                                                <a href="{{ route('product-type.edit', $type->id) }}"
                                                    class="btn btn-info btn-circle">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>


                                        </div>
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
