@extends('frontend/layout')

@section('content')
    <div class="container-fluid">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Danh sách sản phẩm</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#all-products" data-toggle="tab">All products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#women" data-toggle="tab">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#men" data-toggle="tab">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bag" data-toggle="tab">Bag</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#shoes" data-toggle="tab">Shoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#watches" data-toggle="tab">Watches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#other" data-toggle="tab">Other</a>
                </li>
            </ul>

            <div class="tab-content">
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
                                                alt="product image" />
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
                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                        href="{{ route('cart.add', $product->id) }}">Add to cart</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div id="women" class="tab-pane fade">
                    <!-- Nội dung tab women -->
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                @foreach ($products as $product)
                                    @if ($product->type->name == 'Women')
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/images/' . $product->image) }}"
                                                    alt="product image" />
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
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('cart.add', $product->id) }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div id="men" class="tab-pane fade">
                    <!-- Nội dung tab Men -->
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                @foreach ($products as $product)
                                    @if ($product->type->name == 'Men')
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/images/' . $product->image) }}"
                                                    alt="product image" />
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
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('cart.add', $product->id) }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div id="bag" class="tab-pane fade">
                    <!-- Nội dung tab Bag -->
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                @foreach ($products as $product)
                                    @if ($product->type->name == 'Bag')
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/images/' . $product->image) }}"
                                                    alt="product image" />
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
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('cart.add', $product->id) }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div id="shoes" class="tab-pane fade">
                    <!-- Nội dung tab Shoes -->
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                @foreach ($products as $product)
                                    @if ($product->type->name == 'Shoes')
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/images/' . $product->image) }}"
                                                    alt="product image" />
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
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('cart.add', $product->id) }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div id="watches" class="tab-pane fade">
                    <!-- Nội dung tab Watches -->
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                @foreach ($products as $product)
                                    @if ($product->type->name == 'Watches')
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/images/' . $product->image) }}"
                                                    alt="product image" />
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
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('cart.add', $product->id) }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div id="other" class="tab-pane fade">
                    <!-- Nội dung tab Other -->
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                @foreach ($products as $product)
                                    @if ($product->type->name == 'Other')
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/images/' . $product->image) }}"
                                                    alt="product image" />
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
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('cart.add', $product->id) }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
