@extends('admin_layout')
@section('admin_content')
    <style>
        span.text-alert.text-red\; {
            color: black;
            font-family: "Times New Roman";
            font-weight: initial;
        }
        td {
            color: black;
            font-family: monospace;
            text-align: center;
            border-bottom: 2px solid;
        }
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
         data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <div class="col-12">
                    <a class="nav-link text-white " href="{{URL::to('/add-product')}}">
                    <span style="background:black;
                                font-size: 20px;
                                font-family: auto;
                                font-weight: bold;
                                padding: 10px;
                                border-radius: 5px;
                                color: #f0f2f5;" class="nav-link-text ms-1">Thêm Mới</span>
                    </a>
                </div>

            </nav>

        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div style="margin-bottom:20px " class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div style="height: 70px" class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

                            <h6 style="float: left; margin-right: 20px" class="text-white text-capitalize ps-3">Sản Phẩm</h6>
                            <?php

                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert text-red;">' . $message . '</span>';
                                Session::put('message', null);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <table class="">
                                <thead>
                                <tr style="padding: 10px;
                                            background: #e4f7e4;
                                            color: black;
                                            height: 40px;
                                            font-family: 'Font Awesome 5 Brands';
                                            border: 2px solid navy;
                                            text-align: center;">
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Slug</th>
                                    <th>Giá</th>
                                    <th>Hình sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th style="">Thương hiệu</th>

                                    <th>Hiển thị</th>
                                    <th></th>

                                    <th style="width:30px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_product as $key => $pro)
                                    <tr>
                                        <td style="">{{ $pro->product_name }}</td>
                                        <td>{{ $pro->product_quantity }}</td>
                                        <td>{{ $pro->product_slug }}</td>
                                        <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
                                        <td><img src="public/uploads/product/{{ $pro->product_image }}" height="100" width="100"></td>
                                        <td>{{ $pro->category_name }}</td>
                                        <td>{{ $pro->brand_name }}</td>

                                        <td><span class="text-ellipsis">
                                          <?php
                                                if($pro->product_status==0){
                                                    ?>
                                            <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                            <?php
                                                }else{
                                                    ?>
                                             <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                            <?php
                                                }
                                                    ?>
                                        </span></td>

                                        <td>
                                            <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                            <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                                <i class="fa fa-times text-danger text"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <footer style="margin-top: 20px" class="panel-footer">
                            <div class="row">

                                <div class="col-sm-5 text-center">
                                    <small class="text-muted inline m-t-sm m-b-sm"></small>
                                </div>
                                <div class="col-sm-7 text-right text-center-xs">
                                    <ul class="pagination pagination-sm m-t-none m-b-none">
                                        {!!$all_product->links()!!}
                                    </ul>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
