
@extends('admin_layout')
@section('admin_content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            @foreach($edit_category_product as $key => $edit_value)
                            <h6 class="text-black text-capitalize ps-3">Cập nhật danh mục:<span style="color: white"> {{$edit_value->category_name}}</span>  </h6>
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
                                    @foreach($edit_category_product as $key => $edit_value)
                                        <div class="position-center">
                                            <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
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
                                                          margin-bottom: 10px" type="text" value="{{$edit_value->category_name}}" onkeyup="ChangeToSlug();" name="category_product_name" class="form-control" id="slug" >
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
                                                          margin-bottom: 10px" type="text" value="{{$edit_value->slug_category_product}}" name="slug_category_product" class="form-control" id="convert_slug" >
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
                                                          height: 70px;
                                                          width: 97%;
                                                          margin-bottom: 10px"  style="resize: none" rows="8" class="form-control" name="category_product_desc" id="exampleInputPassword1" >{{$edit_value->category_desc}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputPassword1">Từ khóa danh mục</label>
                                                    <textarea style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          height: 70px;
                                                          margin-bottom: 10px" style="resize: none" rows="8" class="form-control" name="category_product_keywords" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value->meta_keywords}}</textarea>
                                                </div>
                                                <button style="margin-left: 30px" type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
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
