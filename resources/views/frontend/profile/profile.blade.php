@extends('frontend/layout')

@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <h3 class="text-center"> Thông tin tài khoản </h3>
            <div class="pt-5">
                <div class="container py-5">
                    <form class="mx-auto col-lg-6">
                        <div class="mb-3">
                            <div>Email address: <strong>{{ Auth::user()->email }}</strong></div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="phone" class="form-control" id="phone" value="{{ Auth::user()->phone }}" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New password</label>
                            <input type="password" class="form-control" id="newPassword">
                        </div>
                        <div class="mb-3">
                            <label for="cfPassword" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" id="cfPassword">
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>save</button>
                    </form>
                </div>

                <h6 class="mb-0"><a href="{{ route('products') }}" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
            </div>
        </div>
    </section>
@endsection
