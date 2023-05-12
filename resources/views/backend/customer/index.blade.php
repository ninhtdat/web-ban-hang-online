@extends('backend/layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
    </div>
</div>
<h2>customers table</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">họ tên</th>
                <th scope="col">sdt</th>
                <th scope="col">địa chỉ</th>
                <th scope="col">thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-primary">test01@gmail.com</td>
                <td>HaNguyen</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="">Detail</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-primary">test01@gmail.com</td>
                <td>HaNguyen</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="">Detail</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-primary">test01@gmail.com</td>
                <td>HaNguyen</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="">Detail</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-primary">test01@gmail.com</td>
                <td>HaNguyen</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="">Detail</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="text-primary">test01@gmail.com</td>
                <td>HaNguyen</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="">Detail</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection