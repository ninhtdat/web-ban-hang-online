@extends('/frontend/layout')

@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0 img-thumbnail"
                        src="{{ asset('storage/images/' . $product->image) }}" alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">{{ $product->type->name }}</div>
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{ number_format($product->price, 0, ',', '.') }} VND</span>
                    </div>
                    <p class="lead">{{ $product->description }}</p>
                    <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                        <a class="btn btn-outline-dark mt-auto"href="{{ route('cart.add', $product->id) }}">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    @if(!empty($otherProducts->toArray()))
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Sản phẩm tương tự</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($otherProducts as $product)
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
                                        <a class="btn btn-outline-dark mt-auto"href="{{ route('cart.add', $product->id) }}">
                                            <i class="bi-cart-fill me-1"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="{{ route('product-details', $product->id) }}">Chi tiết</a></div>
                            </div>
                        </div>


                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif
@endsection
