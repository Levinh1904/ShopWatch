@extends('admin_layout')
@section('admin_content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            @foreach($edit_brand_product as $key => $edit_value)
                                <h6 class="text-black text-capitalize ps-3">Cập nhật thương hiệu: <span style="color: white"> {{$edit_value->brand_name}}</span>  </h6>
                            @endforeach
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert;">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        </div>
                        <div class="col-lg-12">
                            <section class="panel">
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert">'.$message.'</span>';
                                    Session::put('message',null);
                                }
                                ?>
                                <div class="panel-body">
                                    @foreach($edit_brand_product as $key => $edit_value)
                                        <div class="position-center">
                                            <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputEmail1">Tên danh mục</label>
                                                    <input style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          margin-bottom: 10px" type="text" value="{{$edit_value->brand_name}}"  onkeyup="ChangeToSlug();" name="brand_product_name" class="form-control" id="slug" >
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputEmail1">Slug</label>
                                                    <input style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          margin-bottom: 10px" type="text" value="{{$edit_value->brand_slug}}" name="brand_product_slug" class="form-control" id="convert_slug" >
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputPassword1">Mô tả danh mục</label>
                                                    <textarea style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          margin-bottom: 10px" style="resize: none" rows="8" class="form-control" name="brand_product_desc" id="exampleInputPassword1" >{{$edit_value->brand_desc}}</textarea>
                                                </div>
                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Hình Ảnh</button>

                                                <div class="image-upload-wrap">
                                                    <input name="brand_product_image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <h3>Kéo và thả tệp hoặc chọn thêm hình ảnh</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img style="width: 350px;height: 400px" class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Hình ảnh đã tải lên</span></button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputPassword1">Hiển thị</label>
                                                    <select style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          margin-bottom: 10px" name="brand_product_status" class="form-control input-sm m-bot15">
                                                        <option value="0">Ẩn</option>
                                                        <option value="1">Hiển thị</option>

                                                    </select>
                                                </div>
                                                <button style="margin-left: 30px" type="submit" name="update_brand_product" class="btn btn-info">Cập nhật danh mục</button>
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
