@extends('frontend/layout')

@section('content')
    <br><br>
    @php
        // dd(implode(',', $orders->first()->toArray()));
        // dd(var_dump($orders->first()->toArray()));
    @endphp
    <div class="container">
        <h2>Danh sách đơn hàng bạn đã đặt</h2>
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="tab-content">
                            <div id="tat-ca-don-hang" class="tab-pane fade show active">
                                <!-- Nội dung tab Tất cả đơn hàng -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã</th>
                                            <th scope="col">Ngày tạo</th>
                                            <th scope="col">Khách hàng</th>
                                            <th scope="col">Thanh toán</th>
                                            <th scope="col">Giao hàng</th>
                                            {{-- <th scope="col">Tổng tiền</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $order)
                                            dd(1);
                                            @php
                                                dd(implode(',', $order->toArray()));
                                                // dd(var_dump($orders->first()->toArray()));
                                            @endphp
                                            {{-- @php
                                                $total = 0;
                                            @endphp --}}
                                            <tr>
                                                <td>
                                                    <a href="{{ route('order.show', $order->id) }}"
                                                        class="link-primary">{{ $order->id }}</a>
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
                                                @if ($order->delivery)
                                                    <td class="text-success">Đã giao</td>
                                                @else
                                                    <td class="text-warning">Chưa giao</td>
                                                @endif
                                                {{-- @foreach ($details as $detail)
                                                    @if ($detail->order->id == $order->id)
                                                        @php
                                                            $total += $detail->quantity * $detail->product->price;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <td>{{ number_format($total, 0, ',', '.') }}(VND)</td> --}}
                                            </tr>
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
    </div>
@endsection
