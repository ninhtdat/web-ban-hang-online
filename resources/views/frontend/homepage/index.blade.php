@extends ('frontend/layout')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop thời trang</h1>
                <p class="lead fw-normal text-white-50 mb-0">Chọn phong cách, thể hiện bản thân</p>
            </div>
        </div>
    </header>
    

    <!-- Section-->
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
                                {{-- <div class="col-7"> --}}
                                    <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto"href="{{ route('cart.add', $product->id) }}">
                                                <i class="bi-cart-fill me-1"></i>
                                                Add to cart
                                            </a>
                                        </div>
                                    </div>
                                {{-- </div> --}}
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
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
@endsection
