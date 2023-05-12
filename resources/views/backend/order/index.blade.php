@extends('backend/layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
    </div>
</div>
{{-- <!-- <h2>Orders table</h2>
<div class="pull-right mb-2">
  <a class="btn btn-success" href="{{ route('orders.create') }}"> Add order</a>
</div> --> --}}
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">trạng thái</th>
                <th scope="col">người nhận</th>
                <th scope="col">sdt</th>
                <th scope="col">địa chỉ</th>
                <th scope="col">tổng tiền</th>
                <th scope="col">thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,001</td>
                <td class=".text-black-50">Đang xử lý</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>154300 vnd</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="{{ route('admin.order.detail') }}">chi tiết</a>
                    </form>
                </td>
            </tr>
            <tr>
                <td>1,002</td>
                <td class="text-success">đã thanh toán</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>154300 vnd</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="{{ route('admin.order.detail') }}">chi tiết</a>
                    </form>
                </td>
            </tr>
            <tr>
                <td>1,003</td>
                <td class="text-success">đã thanh toán</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>154300 vnd</td>
                <td>
                    <form action="" method="Post">
                        <a class="btn btn-primary" href="{{ route('admin.order.detail') }}">chi tiết</a>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection