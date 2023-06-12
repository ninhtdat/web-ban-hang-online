@extends('backend/layout')

@section('content')
    <h2>Danh sách khach hang</h2>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('product.create') }}"> them khach hang moi</a>
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
                                <th scope="col">so dien thoai</th>
                                <th scope="col">email</th>
                                <th scope="col">dia chi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="link-primary">ABC123</a>
                                </td>
                                <td>Nguyễn Thị Hà</td>
                                <td>0982341283</td>
                                <td>test01@gmail.com</td>
                                <td>Hai Bà Trưng, Hà Nội</td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
