@extends('backend/layout')
@section('content')
<!-- <h2>Orders table</h2>
<div class="pull-right mb-2">
  <a class="btn btn-success" href="{{ route('orders.create') }}"> Add order</a>
</div> -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Chi tiết đơn hàng</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orders.index') }}" enctype="multipart/form-data"> Back</a>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Người nhận</th>
                <th scope="col">Sdt</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Ngày đặt</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,002</td>
                <td class="text-success">đã thanh toán</td>
                <td>Nguyễn Thị Hà</td>
                <td>0982341283</td>
                <td>Hai Bà Trưng, Hà Nội</td>
                <td>154300 vnd</td>
                <td>test</td>
                <td>17/2/2023 8:23:49</td>
            </tr>
        </tbody>
    </table>
</div></br></br></br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <p>Chi tiết đơn hàng:</p>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>quần short nam</td>
                <td>120.000 vnd</td>
                <td>1</td>
                <td>120.000 vnd</td>
            </tr>
            <tr>
                <td>2</td>
                <td>áo sơ mi nam</td>
                <td>150.000 vnd</td>
                <td>2</td>
                <td>300.000 vnd</td>
            </tr>
            <tr>
                <td>3</td>
                <td>váy nữ</td>
                <td>450.000 vnd</td>
                <td>1</td>
                <td>450.000 vnd</td>
            </tr>
            <tr>
                <td>4</td>
                <td>giày</td>
                <td>673.000 vnd</td>
                <td>1</td>
                <td>673.000 vnd</td>
            </tr>
            <tr>
                <td> <strong>sum: 1.543.000 vnd</strong></td>
            </tr>
        </tbody>
    </table>
    <div class="pull-right">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</div>
@endsection