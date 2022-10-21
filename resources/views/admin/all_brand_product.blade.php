@extends('admin_layout')
@section('admin_content')

    <style>
        span.text-alert.text-red\; {
            color: black;
            font-family: "Times New Roman";
            font-weight: initial;
        }
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
         data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <div class="col-12">
                    <a class="nav-link text-white " href="{{URL::to('/add-brand-product')}}">
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
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div style="height: 70px" class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

                            <h6 style="float: left; margin-right: 20px" class="text-white text-capitalize ps-3">Thương
                                Hiệu</h6>
                            <?php

                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert text-red;">' . $message . '</span>';
                                Session::put('message', null);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th style="color: black"
                                        class="text-uppercase  text-xxs font-weight-bolder opacity-7">Tên danh mục
                                    </th>
                                    <th style="color: black"
                                        class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Slug
                                    </th>
                                    <th style="color: black"
                                        class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh
                                    </th>
                                    <th style="color: black"
                                        class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Trạng
                                        thái
                                    </th>
                                    <th style="color: black" class="text-secondary opacity-7"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_brand_product as $key => $brand_pro)

                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $brand_pro->brand_name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $brand_pro->brand_slug}}</p>
                                        </td>
                                        <td>
                                            <img src="public/uploads/brand/{{ $brand_pro->brand_image }}" height="100" width="150">
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success"><span class="text-ellipsis">
              <?php
                                                if ($brand_pro->brand_status == 0){
                                                    ?>
                <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"><span
                        class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                                                }else{
                                                    ?>
                 <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"><span
                         class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
                                                }
                                                    ?>
            </span></span>
                                        </td>

                                        <td class="align-middle">
                                            <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}"
                                               class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                               data-original-title="Edit user">
                                                <i style="font-size: 18px;padding-right: 10px"
                                                   class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a>
                                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')"
                                               href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}"
                                               class="active styling-edit" ui-toggle-class="">
                                                <i style="font-size: 18px;" class="fa fa-times text-danger text"></i>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">

                                <div class="col-sm-5 text-center">
                                    <small class="text-muted inline m-t-sm m-b-sm"></small>
                                </div>
                                <div class="col-sm-7 text-right text-center-xs">
                                    <ul class="pagination pagination-sm m-t-none m-b-none">
                                        {!!$all_brand_product->links()!!}
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
