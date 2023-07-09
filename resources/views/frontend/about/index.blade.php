@extends ('frontend/layout')

@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <br><br><br>
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <strong>SHOP THỜI TRANG</strong>
                    </h3>
                    <p>
                        Tự hào là thương hiệu góp phần thay đổi diện mạo thời trang Việt Nam trên chặng đường hoà mình cùng
                        dòng chảy thời trang thế giới. Những thiết kế từ SHOP luôn đơn giản nhưng tinh tế.
                        <br>
                        Với các dòng sản phẩm chính:
                        <br>thời trang nữ, <br>thời trang nam, <br>túi xách, <br>giày đồng hồ.
                        <br>
                        cùng những nét đặc trưng riêng trong thiết kế, SHOP tự tin mang đến cho khách hàng “giải pháp” thời
                        trang phù hợp với nhiều độ tuổi, phong cách ăn mặc và hoàn cảnh sử dụng khác nhau.
                    </p>

                </div>
                <div class="col-md-6">
                    <img class="img-thumbnail" src="{{ asset('frontend/assets/about-01.jpg') }}" />
                </div>
            </div>
        </div>
    </section>
@endsection
