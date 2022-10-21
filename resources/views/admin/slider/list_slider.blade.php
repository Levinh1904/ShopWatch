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
                    <a class="nav-link text-white " href="{{URL::to('/add-slider')}}">
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
                                        class="text-uppercase  text-xxs font-weight-bolder opacity-7">Tên slide
                                    </th>
                                    <th style="color: black"
                                        class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh
                                    </th>
                                    <th style="color: black"
                                        class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Mô tả
                                    </th>
                                    <th style="color: black"
                                        class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">Trạng
                                        thái
                                    </th>
                                    <th style="color: black" class="text-secondary opacity-7"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_slide as $key => $slide)
                                    <tr>
                                        <td>{{ $slide->slider_name }}</td>
                                        <td><img src="public/uploads/slider/{{ $slide->slider_image }}" height="250"
                                                 width="400"></td>
                                        <td>{{ $slide->slider_desc }}</td>
                                        <td><span class="text-ellipsis">
              <?php
                                                if ($slide->slider_status == 1){
                                                    ?>
                <a href="{{URL::to('/unactive-slide/'.$slide->slider_id)}}"><span
                        class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                                                }else{
                                                    ?>
                 <a href="{{URL::to('/active-slide/'.$slide->slider_id)}}"><span
                         class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
                                                }
                                                    ?>
            </span></td>
                                        <td>

                                            <a onclick="return confirm('Bạn có chắc là muốn xóa slide này ko?')"
                                               href="{{URL::to('/delete-slide/'.$slide->slider_id)}}"
                                               class="active styling-edit" ui-toggle-class="">
                                                <i class="fa fa-times text-danger text"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
