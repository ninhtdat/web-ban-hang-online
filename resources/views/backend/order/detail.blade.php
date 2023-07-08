@extends('backend/layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chi tiết đơn hàng</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('order.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
    <br class="my-5">
    <div class="container-fluid">
        <strong> Order details</strong>
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Mã</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">SDT</th>
                                <th scope="col">Email</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Thanh toán</th>
                                <th scope="col">Giao hàng</th>
                                <th scope="col">Thao tac</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->created_at }}</td>
                                @if ($order->customer)
                                    <td>{{ $order->customer->name }}</td>
                                    <td>{{ $order->customer->phone }}</td>
                                    <td>{{ $order->customer->email }}</td>
                                @else
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->phone }}</td>
                                    <td>{{ $order->user->email }}</td>
                                @endif
                                <td>{{ $order->address }}</td>
                                <form action="{{ route('order.update', $order->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <td>
                                        <select class="custom-select my-1 mr-sm-2" name="pay">
                                            @if ($order->pay)
                                                <option selected value="1">Đã thanh toán</option>
                                                <option value="0">Chưa thanh toán</option>
                                            @else
                                                <option value="1">Đã thanh toán</option>
                                                <option selected value="0">Chưa thanh toán</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select my-1 mr-sm-2" name="delivery">
                                            @if ($order->delivery)
                                                <option selected value="1">Đã giao</option>
                                                <option value="0">Chưa giao</option>
                                            @else
                                                <option value="1">Đã giao</option>
                                                <option selected value="0">Chưa giao</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" type="submit">Save</button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br class="my-5">
    <hr>
    <br class="my-5">

    <strong>Chi tiết đơn hàng</strong>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">hình ảnh</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                    {{-- <th scope="col">thao tác</th> --}}
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach ($details as $detail)
                    @php $total += $detail->product->price * $detail->quantity; @endphp
                    <tr>
                        <td>{{ $detail->product->id }}</td>
                        <td>
                            <img class="rounded" src="{{ asset('storage/images/' . $detail->product->image) }}"
                                width="120" height="80" alt="...">
                        </td>
                        <td>{{ $detail->product->name }}</td>
                        <td>{{ $detail->product->type->name }}</td>
                        <td>{{ $detail->quantity }}</td>
                        <td>{{ number_format($detail->product->price, 0, ',', '.') }} (vnd)</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h5> <strong>sum: {{ number_format($total, 0, ',', '.') }} (VND)</strong></h5>

        <br class="my-5">
        <hr>
        <br class="my-5">
        @if ($order->pay && $order->delivery)
            <a class="btn btn-danger" href="#" role="button">Xóa đơn hàng</a>
        @else
            <a class="btn btn-danger" href="#" role="button">Hủy đơn hàng</a>
        @endif
    </div>
@endsection
