<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lê Vĩnh Wath</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/images/favicon.ico')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/vendor/Pe-icon-7-stroke.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/plugins/magnific-popup.min.')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">

</head>

<body>

<div class="main-wrapper">

    <!-- Begin Main Header Area -->
    <header class="main-header_area position-relative">
        <div class="header-top border-bottom d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="header-top-left">
                            <ul class="dropdown-wrap text-matterhorn">
                                <li>
                                    Call Us
                                    <a href="tel://0326190400">0326190400</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="header-top-right text-matterhorn col-6 ">
                            <p class="shipping mb-0">Giao hàng miễn phí khi đặt hàng trên <span>200.000 VNĐ</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-middle-wrap">
                            <a href="{{URL::to('/trang-chu')}}" class="header-logo">
                                <img style="width: 170px;" src="{{asset('public/frontend/images/logo/logo.png')}}" alt="Header Logo">
                            </a>
                            <div class="header-search-area d-none d-lg-block">
                                <form action="{{URL::to('/tim-kiem')}}" method="POST" class="header-searchbox">
                                    {{csrf_field()}}
                                    <input name="keywords_submit" class="input-field" type="text" placeholder="Tìm kiếm sản phẩm">
                                    <button name="search_items" class="btn btn-outline-whisper btn-primary-hover" type="submit"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <div class="header-right">
                                <ul>
                                    <li class="dropdown d-none d-md-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="pe-7s-users"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                            <li><a class="dropdown-item" href="my-account.html">Đăng Nhập</a></li>
                                            <li><a class="dropdown-item" href="login-register.html">Đăng Ký</a></li>
                                        </ul>
                                    </li>
                                    <li class="d-none d-md-block">
                                        <a href="wishlist.html">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                    <li class="d-block d-lg-none">
                                        <a href="#searchBar" class="search-btn toolbar-btn">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{URL::to('/gio-hang')}}" class="minicart-btn toolbar-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="quantity">3</span>
                                        </a>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header header-sticky" data-bg-color="#bac34e">
            <div class="container">
                <div class="main-header_nav position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-12 d-none d-lg-block">
                            <div class="main-menu">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="{{URL::to('/trang-chu')}}">Trang Chủ
                                            </a>
                                        </li>
                                        @foreach($category as $key => $cate)
                                        <li>
                                            <a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a>
                                        </li>
                                        @endforeach
                                        <li class="drop-holder">
                                            <a href="javascript:void(0)">Thương Hiệu
                                                <i class="fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="drop-menu">
                                                @foreach($brand as $key => $brand)
                                                <li>
                                                    <a href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}">{{$brand->brand_name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="{{URL::to('/show-blog')}}">Bài Viết
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('/contact')}}">Liên Hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu_wrapper" id="mobileMenu">
            <div class="harmic-offcanvas-body">
                <div class="inner-body">
                    <div class="harmic-offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <div class="offcanvas-user-info text-center px-6 pb-5">
                        <div class=" text-silver">
                            <p class="shipping mb-0">Giao hàng miễn phí khi đặt hàng trên <span class="text-primary">200.00 VND</span></p>
                        </div>
                        <ul class="dropdown-wrap justify-content-center text-silver">
                            <li class="dropdown dropup">
                                <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pe-7s-users"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                    <li><a class="dropdown-item" href="my-account.html">Đăng Nhập</a></li>
                                    <li><a class="dropdown-item" href="login-register.html">Đăng Ký</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-menu_area">
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Trang Chủ
                                        </span>
                                    </a>
                                </li>
                                @foreach($category as $key => $cate)
                                    <li>
                                        <a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">
                                            <span class="mm-text">{{$cate->category_name}}</span>
                                        </a>
                                    </li>
                                @endforeach
                                <li class="menu-item-has-children">
                                    <a href="#">
                                            <span class="mm-text">Thương Hiệu
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach($brand as $key => $brand)
                                            <li>
                                                <a href="">
                                                    <span class="mm-text"></span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Bài Viêt</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Liên Hệ</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-search_wrapper" id="searchBar">
            <div class="harmic-offcanvas-body">
                <div class="container h-100">
                    <div class="offcanvas-search">
                        <div class="harmic-offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <span class="searchbox-info">Start typing and press Enter to search</span>
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Search">
                            <button class="search-btn" type="submit"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-minicart_wrapper" id="miniCart">
            <div class="harmic-offcanvas-body">
                <div class="minicart-content">
                    <div class="minicart-heading">
                        <h4 class="mb-0">Shopping Cart</h4>
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <ul class="minicart-list">
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i
                                    class="pe-7s-close"></i></a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="public/frontend/images/product/small-size/1-1-112x124.jpg" alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Black Pepper Grains</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i
                                    class="pe-7s-close"></i></a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="public/frontend/images/product/small-size/1-2-112x124.jpg" alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Peanut Big Bean</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#">
                                <i class="pe-7s-close"></i>
                            </a>
                            <a href="shop.html" class="product-item_img">
                                <img class="img-full" src="public/frontend/images/product/small-size/1-3-112x124.jpg" alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Dried Lemon Green</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-item_total">
                    <span>Subtotal</span>
                    <span class="ammount">$240.00</span>
                </div>
                <div class="group-btn_wrap d-grid gap-2">
                    <a href="cart.html" class="btn btn-secondary btn-primary-hover">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
                </div>
            </div>
        </div>
        <div class="global-overlay"></div>
    </header>
    <!-- Main Header Area End Here -->
    <!-- Begin Slider Area -->
    <div class="slider-area">

        <!-- Main Slider -->
        <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                @php
                    $i = 0;
                @endphp
                @foreach($slider as $key => $slide)
                    @php
                        $i++;
                    @endphp
                   <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{asset('public/uploads/slider/'.$slide->slider_image)}}" alt="{{$slide->slider_desc}}">
                        <div class="container">
                            <div class="slide-content">
                                <h2 class="title font-weight-bold mb-4" style="color: antiquewhite">{{$slide->slider_name}}</h2>
                                <p class="short-desc different-width mb-9" style="color: darkgoldenrod;font-family: 'Times New Roman'">{{$slide->slider_desc}}</p>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination with-bg d-md-none"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <!-- Slider Area End Here -->

    @yield('content')
    <!-- Begin Brand Area -->
    <div class="brand-area section-space-y-axis-100" style="padding-top: initial; margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container brand-slider">
                        <div class="swiper-wrapper">
                            @foreach($brand_image as $key => $brand)
                            <div class="swiper-slide">
                                <a class="brand-item" href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}">
                                    <img src="{{URL::to('/public/uploads/brand/'.$brand->brand_image)}}" alt="Brand Image">

                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->
    <!-- Begin Footer Area -->
    <div class="footer-area">
        <div class="footer-top section-space-y-axis-100 text-black" data-bg-color="#e5ddcc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-item">
                            <div class="footer-logo pb-4">
                                <a href="{{URL::to('/trang-chu')}}" class="header-logo">
                                    <img style="width: 120px;margin:auto" src="{{asset('public/frontend/images/logo/logo2.png')}}" alt="Header Logo">
                                </a>
                            </div>
                            <div class="widget-contact-info pb-6">
                                <ul>
                                    <li>
                                        <i class="pe-7s-map-marker"></i>
                                        Đà Nẵng
                                    </li>
                                    <li>
                                        <i class="pe-7s-mail"></i>
                                        <a href="mailto://vinh44604@donga.edu.vn">vinh44604@donga.edu.vn</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-6 pt-10 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">Danh Mục</h3>
                            <ul class="widget-list-item">
                                @foreach($category as $key => $cate)
                                    <li>
                                        <a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-6 pt-10 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">Tài khoản</h3>
                            <ul class="widget-list-item">
                                <li>
                                    <a href="javascript:void(0)">Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Đăng ký</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Giỏ hàng</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Trang chủ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pt-10 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="widget-title mb-5">Cửa hàng</h3>
                        </div>
                        <div class="widget-form-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.5701228058755!2d108.18045282918847!3d16.050927999305763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb404c09c51cf9a0!2zMTbCsDAzJzAzLjMiTiAxMDjCsDEwJzUxLjYiRQ!5e0!3m2!1sen!2s!4v1662982259059!5m2!1sen!2s" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3" data-bg-color="#bac34e">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <span class="copyright-text text-white">Của hàng LÊ VĨNH SHOP chào quý khách<i class="fa fa-heart text-danger"></i>  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End Here -->

    <!-- Begin Scroll To Top -->
    <a class="scroll-to-top" href="">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- Scroll To Top End Here -->

</div>

<!-- Global Vendor, plugins JS -->

<!-- JS Files
============================================ -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<script src="{{asset('public/frontend/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('public/frontend/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('public/frontend/js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('public/frontend/js/vendor/jquery.waypoints.js')}}"></script>

<!--Plugins JS-->
<script src="{{asset('public/frontend/js/plugins/wow.min.js')}}"></script>
<script src="{{asset('public/frontend/js/plugins/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/frontend/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/js/plugins/jquery.nice-select.js')}}"></script>
<script src="{{asset('public/frontend/js/plugins/parallax.min.js')}}"></script>
<script src="{{asset('public/frontend/js/plugins/jquery.magnific-popup.min.js')}}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('public/frontend/js/main.js')}}"></script>

</body>

</html>
