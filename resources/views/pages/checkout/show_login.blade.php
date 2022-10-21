@extends('welcome')
@section('content')
    <style>
        .slide-inner.bg-height {
            display: none;}
        .login-form {
            height: 400px;
        }
    </style>
    <div class="login-register-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{URL::to('/login-customer')}}" method="POST">
                        {{csrf_field()}}
                        <div class="login-form">
                            <h4 class="login-title">Đăng Nhập</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Địa chỉ Email*</label>
                                    <input name="email_account" type="email" placeholder="Địa chỉ email">
                                </div>
                                <div class="col-lg-12">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="password_account" placeholder="Mật khẩu">
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Nhớ mật khẩu</label>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-1 mt-md-0">
                                    <div class="forgotton-password_info">
                                        <a style="color: red" href="#">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button type="submit" class="btn btn-custom-size lg-size btn-secondary btn-primary-hover rounded-0">Đăng Nhập</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 pt-10 pt-lg-0">
                    <form action="#" style="height: 400px">
                        <div class="login-form">
                            <h4 class="login-title">Thành Viên Mới</h4>
                            <p style="font-family: -webkit-body;
                                    font-size: 20px;">Nếu bạn chưa là thành viên, bạn cần vào trang đăng ký và tạo tài khoản.</p>
                            <p style="font-family: -webkit-body;
                                    font-size: 20px;">Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn đặt hàng trong tài khoản của bạn và hơn thế nữa.</p>
                            <div class="xs-margin"></div><a href="/Trang-chu/dang-ky" class="btn btn-custom btn-lg" style="font-family: 'Playfair Display';
                                    font-weight: bold;
                                    ">Đăng ký tài khoản</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
