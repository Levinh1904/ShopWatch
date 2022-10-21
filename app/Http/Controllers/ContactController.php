<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slider;
use App\Blog;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class ContactController extends Controller
{
    public function show_contact(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $brand_image = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        return view('pages.contact.show_contact')->with('category',$cate_product)->with('brand_image',$brand_image)->with('brand',$brand_product)->with('slider',$slider);
    }
    public function save_contact(Request $request){
        //$this->AuthLogin();
        $data = array();

        $data['contact_name'] = $request->contact_name;
        $data['contact_email'] = $request->contact_email;
        $data['contact_mess'] = $request->contact_mess;

        DB::table('tbl_contact')->insert($data);
        Session::put('message','Cảm ơn bạn đã phản hồi');
        return Redirect::to('/thanks-contact');
    }
    public function thank_contact(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $brand_image = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        return view('pages.contact.thank_contact')->with('category',$cate_product)->with('brand_image',$brand_image)->with('brand',$brand_product)->with('slider',$slider);
    }
}
