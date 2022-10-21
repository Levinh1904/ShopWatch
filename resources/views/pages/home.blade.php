@extends('welcome')
@section('content')

<!-- Begin Banner With Category -->
<div class="banner-with-category">
    <div class="banner-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item">
                        <div class="banner-img img-zoom-effect">
                            <img style="height: 200px;" class="img-full" src="{{asset('public/uploads/product/giam10.jfif')}}" alt="Banner Image">
                            <div class="inner-content">
                                <h5 class="offer">Giảm 10%</h5>
                                <h4 class="title mb-5" style="color: brown;">Hóa đơn trên 10 triệu</h4>
                                <div class="button-wrap">
                                    <a class="btn btn-primary btn-white-hover rounded-0" href="shop.html">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                    <div class="banner-item">
                        <div class="banner-img img-zoom-effect">
                            <img style="height: 200px;"  class="img-full" src="{{asset('public/uploads/product/doi2.jpg')}}" alt="Banner Image">
                            <div class="inner-content">
                                <h5 class="offer">Giảm 20%</h5>
                                <h4 class="title mb-5" style="color: brown;">Khi mua đồng hồ đôi</h4>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="{{URL::to('/danh-muc/dong-ho-doi')}}">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                    <div class="banner-item">
                        <div class="banner-img img-zoom-effect">
                            <img style="height: 200px;"  class="img-full" src="{{asset('public/uploads/product/giam10.jfif')}}" alt="Banner Image">
                            <div class="inner-content">
                                <h5 class="offer">Giảm 5%</h5>
                                <h4 class="title mb-5" style="color: brown;">Khi mua phụ kiện</h4>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="{{URL::to('/danh-muc/phu-kien')}}">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner With Category End Here -->

<!-- Begin Product Area -->
<div class="product-area product-style-2 section-space-y-axis-100">
    <div class="container">
        <div class="section-title text-center ">
            <h2 class="title mb-0">Sản Phẩm Mới</h2>
        </div>
        <div class="row">
            @foreach($all_product as $key => $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                        <form>
                            @csrf
                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">

                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">

                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                        <img style="height: 300px;" class="img-full" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content" style="height: 150px;font-family: cursive;">
                                    <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}" class="product-name">{{$product->product_name}}</a>
                                    <div class="price-box pb-1">
                                        <span style="color: red" class="new-price">{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Shipping Area -->
<div class="shipping-area section-space-top-200">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="public/frontend/images/shipping/icon/plane.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Miễn phí vận chuyển</h5>
                        <p class="short-desc mb-0">Ưu đãi giao hàng tận nhà miễn phí</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="public/frontend/images/shipping/icon/earphones.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Hỗ trợ trực tuyến</h5>
                        <p class="short-desc mb-0">Hỗ trợ trực tuyến 24/7</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="public/frontend/images/shipping/icon/shield.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Thanh toán an toàn</h5>
                        <p class="short-desc mb-0">Hệ thống thanh toán hoàn toàn an toàn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shipping Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-y-axis-100 product-style-2">
    <div class="container">
        <div class="section-title text-center pb-55">
            <h2 class="title mb-0">Đồng Hồ Nam</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container product-slider swiper-arrow with-radius border-issue">
                    <div class="swiper-wrapper">
                        @foreach($all_product_1 as $key => $all_product_1)
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="{{URL::to('/chi-tiet/'.$all_product_1->product_slug)}}">
                                        <img style="height: 300px;" class="img-full" src="{{URL::to('public/uploads/product/'.$all_product_1->product_image)}}" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content" style="height: 150px;">
                                    <a class="product-name" href="single-product.html">{{$all_product_1->product_name}}</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">{{number_format($all_product_1->product_price,0,',','.').' '.'VNĐ'}}</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-nav-wrap">
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<div class="product-area section-space-y-axis-100 product-style-2" style="padding-top: inherit;">
    <div class="container">
        <div class="section-title text-center pb-55">
            <h2 class="title mb-0">Đồng Hồ Nữ</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container product-slider swiper-arrow with-radius border-issue">
                    <div class="swiper-wrapper">
                        @foreach($all_product_2 as $key => $all_product_2)
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="{{URL::to('/chi-tiet/'.$all_product_2->product_slug)}}">
                                            <img style="height: 300px;" class="img-full" src="{{URL::to('public/uploads/product/'.$all_product_2->product_image)}}" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="height: 150px;">
                                        <a class="product-name" href="single-product.html">{{$all_product_2->product_name}}</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">{{number_format($all_product_2->product_price,0,',','.').' '.'VNĐ'}}</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-nav-wrap">
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Banner Area -->
<div class="banner-with-testimonial py-10" data-bg-image="public/frontend/images/banner/2-1-1920x523.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="parallax-img-wrap">
                    <div class="papaya">
                        <div class="scene fill">
                            <div class="expand-width" data-depth="0.2">
                                <img src="public/frontend/images/1.jpg" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="swiper-container testimonial-slider text-white">
                    <div class="swiper-wrapper">
                        @foreach($all_contact as $key => $all_contact)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-content section-title">
                                    <span class="sub-title">Những gì mọi người nói</span>
                                    <h2 class="title mb-6">Phản hồi từ khách hàng</h2>
                                    <p class="short-desc">{{$all_contact->contact_mess}}</p>
                                    <div class="user-info">
                                        <div class="user-img">
                                            <img src="public/frontend/images/testimonial/user/1.png" alt="User Image">
                                        </div>
                                        <div class="user-content">
                                            <span class="user-name">{{$all_contact->contact_name}}</span>
                                            <span class="user-occupation">Khách hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="testimonial-button-next"></div>
                    <div class="testimonial-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->


@endsection
