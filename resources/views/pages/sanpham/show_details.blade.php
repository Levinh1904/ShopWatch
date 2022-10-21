@extends('welcome')
@section('content')
    <style>
        .slide-inner.bg-height {
            display: none;}
        button.btn.btn-primary.btn-sm.add-to-cart {
            height: 50px;
        }
    </style>
    @foreach($product_details as $key => $value)
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img h-100">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{URL::to('/public/uploads/product/'.$value->product_image)}}"
                                       class="single-img gallery-popup">
                                        <img class="img-full" src="{{URL::to('/public/uploads/product/'.$value->product_image)}}"
                                             alt="Product Image">
                                    </a>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-thumb-with-content row">
                        <div class="col-12 order-lg-1 order-2 pt-10 pt-lg-0">
                            <form action="{{URL::to('/save-cart')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

                                <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

                                <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">

                                <input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

                                <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                                <div class="single-product-content">
                                    <h2 class="title">{{$value->product_name}}</h2>
                                    <div class="price-box pb-1">
                                        <span class="new-price text-danger">{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>
                                        <span class="old-price text-primary">$90.00</span>
                                    </div>
                                    <div class="rating-box-wrap pb-7">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="review-status ps-4">
                                            <a href="javascript:void(0)">( 1 Customer Review )</a>
                                        </div>
                                    </div>
                                    <p class="short-desc mb-6">{!!$value->product_content!!}</p>
                                    <ul class="quantity-with-btn pb-7">
                                        <li class="quantity">
                                            <div class="cart-plus-minus">
                                                <input name="qty" type="number" min="1" class="cart-plus-minus-box cart_product_qty_{{$value->product_id}}"  value="1" />
                                                <input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
                                            </div>
                                        </li>
                                        <li class="add-to-cart">
                                            <button name="add-to-cart" tyle="height: 100px;font-weight: bold" class="btn btn-primary btn-sm add-to-cart" data-id_product="{{$value->product_id}}">
                                                Thêm giỏ hàng
                                            </button>
                                        </li>
                                        <li class="wishlist-btn-wrap">
                                            <a class="btn rounded-0" href="wishlist.html">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="product-category text-matterhorn pb-2">
                                        <span class="title">Danh mục : {{$value->category_name}}</span>

                                    </div>
                                    <div class="product-category product-tags text-matterhorn pb-4">
                                        <span class="title">Thương hiệu : {{$value->brand_name}}</span>
                                    </div>
                                    <div class="product-category product-tags text-matterhorn pb-4">
                                        <span class="title">Số lượng tồn kho : {{$value->product_quantity}}</span>
                                    </div>
                                    <div class="social-link align-items-center pb-lg-8">
                                        <span class="title pe-3">Share:</span>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-tumblr"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-tab-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-tab-nav product-tab-style-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active btn btn-custom-size" id="description-tab" data-bs-toggle="tab"
                               href="#description" role="tab" aria-controls="description" aria-selected="true">
                                Mô tả
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-custom-size" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                               role="tab" aria-controls="reviews" aria-selected="false">
                                Chi tiết sản phẩm
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-custom-size" id="shipping-tab" data-bs-toggle="tab" href="#shipping"
                               role="tab" aria-controls="shipping" aria-selected="false">
                                Đánh giá
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                             aria-labelledby="description-tab">
                            <div class="product-description-body">
                                <p class="short-desc mb-0">{!!$value->product_desc!!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-body">
                                <p>
                                    {!!$value->product_content!!}
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                            <div class="product-shipping-body">
                                <h4 class="title">Shipping</h4>
                                <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20
                                    days to
                                    deliver. Our product is good with reasonable price and we believe you will worth
                                    it.
                                    So please wait for it patiently! Thanks.Any question please kindly to contact us
                                    and
                                    we promise to work hard to help you to solve the problem</p>
                                <h4 class="title">About return request</h4>
                                <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                    then we will help you to solve the problem, so please close the return request!
                                    Thanks</p>
                                <h4 class="title">Guarantee</h4>
                                <p class="short-desc mb-0">If it is the quality question, we will resend or refund
                                    to
                                    you; If you receive damaged or wrong items, please contact us and attach some
                                    pictures about product, we will exchange a new correct item to you after the
                                    confirmation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="product-slider-area section-space-top-95 section-space-bottom-100" style="padding-top: inherit;">
        <div class="container">
            <div class="section-title text-center pb-55">
                <h2 class="title mb-0">Sản phẩm liên quan</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-slider-holder swiper-arrow">
                        <div class="swiper-container product-slider border-issue">
                            <div class="swiper-wrapper">
                                @foreach($relate as $key => $lienquan)
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{URL::to('/chi-tiet/'.$lienquan->product_slug)}}">
                                                <img style="height: 300px" class="img-full"
                                                     src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}"
                                                     alt="Product Images">
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
                                        <div class="product-content" style="height: 150px">
                                            <a class="product-name" href="{{URL::to('/chi-tiet/'.$lienquan->product_slug)}}">{{$lienquan->product_name}}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</span>
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
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
