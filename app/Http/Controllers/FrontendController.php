<?php

namespace App\Http\Controllers;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request){
      $software = DB::table('soft_details')->get();
      $seo = DB::table('page_seo')->where('link', '/')->first();
   return view('frontend.index')->with('seo', $seo)->with('software', $software);
    }
    public function service(Request $request){
      $seo = DB::table('page_seo')->where('link', 'service')->first();
   return view('frontend.service')->with('seo', $seo);
    }
     public function hosting(Request $request){
      $seo = DB::table('page_seo')->where('link', 'hosting')->first();
   return view('frontend.host')->with('seo', $seo);
    }
    public function contact(Request $request){
      $seo = DB::table('page_seo')->where('link', 'contact')->first();
   return view('frontend.contact')->with('seo', $seo);
    }
     public function seo(Request $request){
      $seo = DB::table('page_seo')->where('link', 'seo')->first();
   return view('frontend.seo')->with('seo', $seo);
    }  
    public function policy(Request $request){
      $seo = DB::table('page_seo')->where('link', 'policy')->first();
     return view('frontend.policy')->with('seo', $seo);
    }
     public function design($slug){
      $banner = DB::table('pro_category')->where('slug', $slug)->first();
      $design = DB::table('graphics_img')->where('slug', $slug)
      ->join('pro_category','graphics_img.category_id','=','pro_category.category_id')->get();
      $seo = DB::table('page_seo')->where('link', 'design/')->first();
      return view('frontend.banner')->with('seo', $seo)->with('banner', $banner)->with('design', $design);
    }
    public function template($slug){
      $template = DB::table('pro_category')->where('slug', $slug)->first();
      $design = DB::table('template')->where('slug', $slug)
      ->join('pro_category','template.category_id','=','pro_category.category_id')->get();
      $seo = DB::table('page_seo')->where('link', 'template/')->first();
      return view('frontend.template')->with('seo', $seo)->with('template', $template)->with('design', $design);
    }
    public function web_app(Request $request){
       $seo = DB::table('page_seo')->where('link', 'web-app')->first();
      return view('frontend.web_app')->with('seo', $seo);
    }
    public function details_gd(Request $request){
     $seo = DB::table('page_seo')->where('link', 'details/graphics-design')->first();
     $category=DB::table('pro_category')->where('sector_id', '3')->get();
      return view('frontend.graphics_details')->with('seo', $seo)->with('category', $category);
    }
    public function details_wd(Request $request){
     $seo = DB::table('page_seo')->where('link', 'details/web-design')->first();
     $category=DB::table('pro_category')->where('sector_id', '2')->get();
      return view('frontend.template_details')->with('seo', $seo)->with('category', $category);
    }
    public function details_wa(Request $request){
      $seo = DB::table('page_seo')->where('link', 'details/web-app')->first();
     $category=DB::table('pro_category')->where('sector_id', '1')->get();
      return view('frontend.software_details')->with('seo', $seo)->with('category', $category);
    }
    public function view_soft(Request $request,$soft_id){
      $details = DB::table('soft_details')->where('soft_id', $soft_id)->first();
      $frame =DB::table('soft_framework')->where('soft_id', $soft_id)
      ->join('framework','soft_framework.frame_id','=','framework.frame_id')->get(); 
      $language =DB::table('soft_language')->where('soft_id', $soft_id)
      ->join('language','soft_language.lan_id','=','language.lan_id')->get();
       $credit =DB::table('soft_credit')->where('soft_id', $soft_id)
      ->join('credit','soft_credit.credit_id','=','credit.credit_id')->get();
      return view('frontend.software')->with('details', $details)->with('frame', $frame)->with('language', $language)->with('credit', $credit);
    }
}
