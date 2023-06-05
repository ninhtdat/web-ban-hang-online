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
                                @if ($order->pay)
                                    <td class="text-success">Đã thanh toán</td>
                                @else
                                    <td class="text-warning">Chưa thanh toán</td>
                                @endif
                                @if ($order->inventory)
                                    <td class="text-success">Đã giao</td>
                                @else
                                    <td class="text-warning">Chưa giao</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
                    <td>{{$detail->product->id}}</td>
                    <td>
                        <img class="rounded" src="{{ asset('storage/images/' . $detail->product->image) }}"
                            width="120" height="80" alt="...">
                    </td>
                    <td>{{$detail->product->name}}</td>
                    <td>{{$detail->product->type->name}}</td>
                    <td>{{$detail->quantity}}</td>
                    <td>{{number_format($detail->product->price, 0, ',', '.')}} (vnd)</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h5> <strong>sum: {{number_format($total, 0, ',', '.')}}  (VND)</strong></h5>

        <br class="my-5">

        <a class="btn btn-primary" href="#" role="button">Link</a>
        <button class="btn btn-primary" type="submit">Button</button>
        <input class="btn btn-primary" type="button" value="Input">
        <input class="btn btn-primary" type="submit" value="Submit">
        <input class="btn btn-primary" type="reset" value="Reset">

    </div>
@endsection
