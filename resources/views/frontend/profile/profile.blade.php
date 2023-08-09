@extends('frontend/layout')

@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <h3 class="text-center"> Thông tin tài khoản </h3>
            <div class="pt-5">
                <div class="container py-5">
                    <form class="mx-auto col-lg-6" method="POST" action="{{ route('profile.updateProfile') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <div>Email address: <strong>{{ Auth::user()->email }}</strong></div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="phone" class="form-control" id="phone" value="{{ Auth::user()->phone }}"
                                name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-user">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control form-control-user">
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
                @if (session()->has('success'))
                    <div class="alert alert-success"> {{ session()->get('success') }} </div>
                @endif
                <h6 class="mb-0"><a href="{{ route('products') }}" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
            </div>
        </div>
    </section>
@endsection
