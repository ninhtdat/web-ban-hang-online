@extends('frontend/layout')

@section('content')
    <div class="container-fluid">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Danh sach san pham</a>
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
                    <a class="nav-link" href="#whatches" data-toggle="tab">Watches</a>
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
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Fancy Product</h5>
                                                <!-- Product price-->
                                                $40.00 - $80.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">View
                                                    options</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute"
                                            style="top: 0.5rem; right: 0.5rem">Sale
                                        </div>
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Special Item</h5>
                                                <!-- Product reviews-->
                                                <div class="d-flex justify-content-center small text-warning mb-2">
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                </div>
                                                <!-- Product price-->
                                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                                $18.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">Add to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute"
                                            style="top: 0.5rem; right: 0.5rem">
                                            Sale</div>
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Sale Item</h5>
                                                <!-- Product price-->
                                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                                $25.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">Add to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Popular Item</h5>
                                                <!-- Product reviews-->
                                                <div class="d-flex justify-content-center small text-warning mb-2">
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                </div>
                                                <!-- Product price-->
                                                $40.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">Add to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute"
                                            style="top: 0.5rem; right: 0.5rem">
                                            Sale</div>
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Sale Item</h5>
                                                <!-- Product price-->
                                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                                $25.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">Add to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Fancy Product</h5>
                                                <!-- Product price-->
                                                $120.00 - $280.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">View
                                                    options</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute"
                                            style="top: 0.5rem; right: 0.5rem">
                                            Sale</div>
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Special Item</h5>
                                                <!-- Product reviews-->
                                                <div class="d-flex justify-content-center small text-warning mb-2">
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                </div>
                                                <!-- Product price-->
                                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                                $18.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">Add to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                            alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">Popular Item</h5>
                                                <!-- Product reviews-->
                                                <div class="d-flex justify-content-center small text-warning mb-2">
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                    <div class="bi-star-fill"></div>
                                                </div>
                                                <!-- Product price-->
                                                $40.00
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="#">Add to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="women" class="tab-pane fade">
                    <!-- Nội dung tab Chưa thanh toán -->
                    tab 2
                </div>
                <div id="men" class="tab-pane fade">
                    <!-- Nội dung tab Chưa giao -->
                    tab 3
                </div>
                <div id="bag" class="tab-pane fade">
                    <!-- Nội dung tab Đã hoàn thành -->
                    tab 4
                </div>
                <div id="shoes" class="tab-pane fade">
                    <!-- Nội dung tab Chưa giao -->
                    tab 6
                </div>
                <div id="watches" class="tab-pane fade">
                    <!-- Nội dung tab Đã hoàn thành -->
                    tab 6
                </div>
                <div id="other" class="tab-pane fade">
                    <!-- Nội dung tab Đã hoàn thành -->
                    tab 7
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
