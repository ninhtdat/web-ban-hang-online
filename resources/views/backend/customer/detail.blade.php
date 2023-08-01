@extends('backend/layout')

@section('content')
    <div class="card shadow ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa thông tin tài khoản</h6>
        </div>

        <div class="card-body">

            <div class="container mt-2">
                <a class="btn btn-primary" href="{{ route('customer.index') }}">Quay lại</a>

                <div class="card-body">
                    <div class="card shadow mb-4">
                        <form class="col-xs-12 col-sm-12 col-md-12">
                            <br>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" value="{{ $user->email }}"
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $user->name }}"
                                    name="name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="phone" class="form-control" id="phone" value="{{ Auth::user()->phone }}"
                                    name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary" disabled>update</button>
                        </form>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
