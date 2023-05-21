@extends('backend/layout')
@section('content')
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <form class="user" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                <hr>
            </form>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <div class="text-center">
                <a class="small" href="{{ route('register') }}">Create an Account!</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <form class="user" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <input type="text" id="name" name="name"
                        class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email"
                        class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password"
                        class="form-control form-control-user" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control form-control-user" placeholder="Confirm password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register
                </button>
                <hr>
            </form>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach

            <div class="text-center">
                <a class="small" href="{{ route('login') }}">Login!</a>
            </div>
        </div>
    </div>
@endsection
