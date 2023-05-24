@extends('backend/layout')

@section('content')
    <h2>Danh sách đơn hàng</h2>

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="table-responsive">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tat-ca-don-hang" data-toggle="tab">Tất cả đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chua-thanh-toan" data-toggle="tab">Chưa thanh toán</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chua-giao" data-toggle="tab">Chưa giao</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#da-hoan-thanh" data-toggle="tab">Đã hoàn thành</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tat-ca-don-hang" class="tab-pane fade show active">
                            <!-- Nội dung tab Tất cả đơn hàng -->
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Khách hàng</th>
                                        <th scope="col">Thanh toán</th>
                                        <th scope="col">Giao hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        @php
                                            $total = 0;
                                        @endphp
                                        <tr>
                                            <td>
                                                <a href="#" class="link-primary">{{ $order->id }}</a>
                                            </td>
                                            <td>{{ $order->created_at }}</td>
                                            @if ($order->customer)
                                                <td>{{ $order->customer->name }}</td>
                                            @else
                                                <td>{{ $order->user->name }}</td>
                                            @endif
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
                                            @foreach ($details as $detail)
                                                @if ($detail->order->id == $order->id)
                                                    @php
                                                        $total += $detail->quantity * $detail->product->price;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <td>{{ $total }}(VND)</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div id="chua-thanh-toan" class="tab-pane fade">
                            <!-- Nội dung tab Chưa thanh toán -->
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Khách hàng</th>
                                        <th scope="col">Thanh toán</th>
                                        <th scope="col">Giao hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        @if ($order->pay == false)
                                            @php
                                                $total = 0;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <a href="#" class="link-primary">{{ $order->id }}</a>
                                                </td>
                                                <td>{{ $order->created_at }}</td>
                                                @if ($order->customer)
                                                    <td>{{ $order->customer->name }}</td>
                                                @else
                                                    <td>{{ $order->user->name }}</td>
                                                @endif
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
                                                @foreach ($details as $detail)
                                                    @if ($detail->order->id == $order->id)
                                                        @php
                                                            $total += $detail->quantity * $detail->product->price;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <td>{{ $total }}(VND)</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="chua-giao" class="tab-pane fade">
                            <!-- Nội dung tab Chưa giao -->
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Khách hàng</th>
                                        <th scope="col">Thanh toán</th>
                                        <th scope="col">Giao hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        @if ($order->inventory == false)
                                            @php
                                                $total = 0;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <a href="#" class="link-primary">{{ $order->id }}</a>
                                                </td>
                                                <td>{{ $order->created_at }}</td>
                                                @if ($order->customer)
                                                    <td>{{ $order->customer->name }}</td>
                                                @else
                                                    <td>{{ $order->user->name }}</td>
                                                @endif
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
                                                @foreach ($details as $detail)
                                                    @if ($detail->order->id == $order->id)
                                                        @php
                                                            $total += $detail->quantity * $detail->product->price;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <td>{{ $total }}(VND)</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="da-hoan-thanh" class="tab-pane fade">
                            <!-- Nội dung tab Đã hoàn thành -->
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Khách hàng</th>
                                        <th scope="col">Thanh toán</th>
                                        <th scope="col">Giao hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        @if ($order->pay && $order->inventory)
                                            @php
                                                $total = 0;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <a href="#" class="link-primary">{{ $order->id }}</a>
                                                </td>
                                                <td>{{ $order->created_at }}</td>
                                                @if ($order->customer)
                                                    <td>{{ $order->customer->name }}</td>
                                                @else
                                                    <td>{{ $order->user->name }}</td>
                                                @endif
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
                                                @foreach ($details as $detail)
                                                    @if ($detail->order->id == $order->id)
                                                        @php
                                                            $total += $detail->quantity * $detail->product->price;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <td>{{ $total }}(VND)</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
