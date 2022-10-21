@extends('welcome')
@section('content')
    <style>
        .slide-inner.bg-height {
            display: none;
        }

        .login-form {
            height: 400px;
        }
    </style>
    <div class="checkout-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-accordion">
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</font>
                            </font><span id="showlogin">

						</span>
                        </h3>

                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="javascript:void(0)">
                                    <p class="checkout-coupon">
                                        <input placeholder="Coupon code" type="text">
                                        <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form method="POST" action="{{url('/save-checkout-customer')}}">
                        @csrf
                        <div class="checkbox-form">
                            <h3>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Chi tiết thanh toán</font>
                                </font>
                            </h3>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tên </font>
                                            </font><span class="required">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">*</font>
											</font>
										</span>
                                        </label>
                                        <input name="shipping_name" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Họ </font>
                                            </font><span class="required">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">*</font>
											</font>
										</span>
                                        </label>
                                        <input name="shipping_last" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Email</font>
                                            </font>
                                        </label>
                                        <input name="shipping_email" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Địa chỉ </font>
                                            </font><span class="required">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">*</font>
											</font>
										</span>
                                        </label>
                                        <input name="shipping_address" placeholder="Địa chỉ đường phố" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Số điện thoại </font>
                                            </font><span class="required">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">*</font>
											</font>
										</span>
                                        </label>
                                        <input name="shipping_phone" placeholder="Số điện thoại cá nhân" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Ghi chú</font>
                                            </font>
                                        </label>
                                    </div>
                                    <textarea name="shipping_notes" style="width: 100%;height: 60px" id="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery." style="height: 88px;"></textarea>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"><input value="Đặt hàng" type="submit"></font>
                                </font>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Đơn đặt hàng của bạn</font>
                            </font>
                        </h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Sản phẩm</font>
                                        </font>
                                    </th>
                                    <th class="cart-product-total">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Tổng cộng</font>
                                        </font>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Mất </font>
                                        </font><strong class="product-quantity">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    × 1</font>
                                            </font>
                                        </strong>
                                    </td>
                                    <td class="cart-product-total"><span class="amount">$165.00</span></td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Mất </font>
                                        </font><strong class="product-quantity">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    × 1</font>
                                            </font>
                                        </strong>
                                    </td>
                                    <td class="cart-product-total"><span class="amount">
											<font style="vertical-align: inherit;">
												<font style="vertical-align: inherit;">$165.00</font>
											</font>
										</span></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Tổng phụ giỏ hàng</font>
                                        </font>
                                    </th>
                                    <td><span class="amount">$215.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Tổng đơn đặt hàng</font>
                                        </font>
                                    </th>
                                    <td><strong><span class="amount">$215.00</span></strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title">
                                                <a href="javascript:void(0)" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            Chuyển khoản trực tiếp.
                                                        </font>
                                                    </font>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. </font>
                                                        <font style="vertical-align: inherit;">Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. </font>
                                                        <font style="vertical-align: inherit;">Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã hết trong tài khoản của chúng tôi.</font>
                                                    </font>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            Thanh toán séc
                                                        </font>
                                                    </font>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment
                                                    reference. Your order won’t be shipped until the funds have cleared in
                                                    our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title">
                                                <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            PayPal
                                                        </font>
                                                    </font>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment
                                                    reference. Your order won’t be shipped until the funds have cleared in
                                                    our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"><input value="Đặt hàng" type="submit"></font>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
