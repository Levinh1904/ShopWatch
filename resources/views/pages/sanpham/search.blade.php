@extends('welcome')
@section('content')
    <!--/recommended_items-->
<style>
    .slide-inner.bg-height {
        display: none;}
</style>
<div class="shop-area section-space-y-axis-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-topbar">
                    <ul>
                        <li class="product-view-wrap">
                            <ul class="nav" role="tablist">
                                <li class="grid-view" role="presentation">
                                    <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view" role="tab" aria-selected="true">
                                        <i class="fa fa-th"></i>
                                    </a>
                                </li>
                                <li class="list-view" role="presentation">
                                    <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab" aria-selected="true">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="page-count">

                                <span></span>Tìm kiếm sản phẩm<span></span>



                        </li>
                        <li class="short">
                            <select class="nice-select wide rounded-0">
                                <option value="1">Sort by Default</option>
                                <option value="2">Sort by Popularity</option>
                                <option value="3">Sort by Rated</option>
                                <option value="4">Sort by Latest</option>
                                <option value="5">Sort by High Price</option>
                                <option value="6">Sort by Low Price</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="tab-content text-charcoal pt-8">
                    <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                        <div class="product-grid-view row">
                            @foreach($search_product as $key => $product)
                                <div class="col-lg-3 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                    <img style="height: 300px" class="img-full" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="Product Images">
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
                                            <div class="product-content">
                                                <a class="product-name" href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">{{$product->product_name}}</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</span>
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
                </div>
            </div>
        </div>
    </div>

@endsection
