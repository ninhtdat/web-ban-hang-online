@extends('frontend/layout')

@section('content')
    <div class="container-fluid">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Danh sách sản phẩm</a>
            <form class="form-inline" action="{{ route('search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='search'>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        {{-- @php dd(empty($products->toArray())) @endphp --}}
        @if (!empty($products->toArray()))
            <div id="all-products" class="tab-pane fade show active">
                <!-- Nội dung tab all products-->
                <section class="py-5">
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                            @foreach ($products as $product)
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="{{ asset('storage/images/' . $product->image) }}"
                                            alt="product image" height="165" width="auto" />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">{{ $product->name }}</h5>
                                                <!-- Product reviews-->
                                                <div class="d-flex justify-content-center small text-warning mb-2">
                                                </div>
                                                <!-- Product price-->
                                                {{ number_format($product->price, 0, ',', '.') }} VND
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="btn-group">
                                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center">
                                                    <a
                                                        class="btn btn-outline-dark mt-auto"href="{{ route('cart.add', $product->id) }}">
                                                        <i class="bi-cart-fill me-1"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                        href="{{ route('product-details', $product->id) }}">Chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        @else
            <section class="h-100 gradient-custom">
                <div class="container py-5">
                    <h3 class="alert alert-warning text-center"> Không tìm thấy sản phẩm phù hợp! </h3>
                </div>
            </section>
        @endif
    </div>
    <!-- /.container-fluid -->
@endsection
