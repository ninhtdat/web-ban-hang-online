@extends ('frontend/layout')

@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <h3 class="text-center"> liên hệ với chúng tôi </h3>
            <div class="pt-5">
                <div class="container py-5">
                    <form class="mx-auto col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">chúng tôi có thể giúp gì cho bạn?</label>
                            <textarea type="text" class="form-control" rows="8" id="content" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
