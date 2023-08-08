@extends('backend/layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chi tiết tài khoản</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}" enctype="multipart/form-data">Quay lại</a>
            </div>
        </div>
    </div>
    <br class="my-5">
    <div class="container-fluid">
        <strong>Thông tin</strong>
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">tên</th>
                                <th scope="col">số điện thoại</th>
                                <th scope="col">email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
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
    {{-- @php dd($user->orders) @endphp --}}
    <div class="container-fluid">
        <strong>Danh sách đơn hàng đã đặt</strong>
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Mã</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Thanh toán</th>
                                <th scope="col">Giao hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->orders as $order)
                                <tr>
                                    <td>
                                        <a href="{{ route('order.show', $order->id) }}"
                                            class="link-primary">{{ $order->id }}</a>
                                    </td>
                                    <td>{{ $order->created_at }}</td>
                                    @if ($order->pay)
                                        <td class="text-success">Đã thanh toán</td>
                                    @else
                                        <td class="text-warning">Chưa thanh toán</td>
                                    @endif
                                    @if ($order->delivery == 2)
                                        <td class="text-success">Đã giao</td>
                                    @elseif ($order->delivery == 1)
                                        <td class="text-primary">Đang giao hàng</td>
                                    @else
                                        <td class="text-warning">Chưa giao</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
