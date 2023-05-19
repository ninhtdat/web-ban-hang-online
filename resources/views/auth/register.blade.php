@extends('auth/layout')

@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
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


                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
