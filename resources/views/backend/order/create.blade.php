@extends('backend/layout')
@section('content')
    <div class="card shadow ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add product</h6>
        </div>

        <div class="card-body">
            <div class="container mt-2">
                <div class="card-body">
                    <div class="card shadow mb-4">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{--  code here --}}

                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
