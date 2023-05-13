@extends('backend/layout')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>
    <h2>Danh sách loại sản phẩm</h2>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('product-type.create') }}"> Add product type</a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> --}}
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
                                            <form>
                                                <a href="{{ route('product-type.edit', $type->id) }}"
                                                    class="btn btn-info btn-circle">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                            </form>
                                            {{-- Delete --}}
                                            <button type="submit" class="btn btn-danger btn-circle" data-toggle="modal"
                                                data-target="#deleteModal">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?
                                                            </h5>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button"
                                                                data-dismiss="modal">Cancel</button>
                                                                <form action="{{ route('product-type.destroy', $type->id) }}" method="Post">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger"
                                                                    type="submit">Delete</button>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end delete  --}}
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
