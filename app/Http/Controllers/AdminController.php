<?php

namespace App\Http\Controllers;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
session_start();

class AdminController extends Controller
{
    public function index(Request $request){
    	return view('admin.index');
    }
     public function index_sector(Request $request){
      return view('admin.add_sector');
    }
      public function add_sector(Request $request){
       
    $data=array();
  $data['sector_id']=$request->sector_id;
    $data['name']=$request->name;
  $data['des']=$request->des;
  DB::table('sector')->insert($data);
  Toastr::success('সেক্টর সফলভাবে এড হয়েছে ', 'Success');
  return Redirect::back();
    }
     public function all_sector(Request $request){
      $cat = DB::table('sector')->get();
      return view('admin.all_sector')->with('cat', $cat);
  }
  public function edit_sector($sector_id){

 $edit=DB::table('sector')->where('sector_id', $sector_id)->first();
  return view('admin.edit_sector')->with('edit', $edit); 
}
public function update_sector(Request $request,$sector_id){
  $data=array();
  $data['name']=$request->name;
  $data['des']=$request->des;

  DB::table('sector')
    ->where('sector_id',$sector_id)
  ->update($data);
  Toastr::success('সেক্টর সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/admin/all-sector');
}
 public function index_profile(Request $request){
 	$profile =DB::table('profile')->first();
      return view('admin.profile')->with('profile', $profile);
    }

    public function add_profile(Request $request){
       
    $data=array();
    $data['phone']=$request->phone;
    $data['email']=$request->email;
    $data['fb']=$request->fb;
    $data['twitter']=$request->twitter;
    $data['youtube']=$request->youtube;
    $data['linkedin']=$request->linkedin;
    $data['google']=$request->google;
    DB::table('profile')->insert($data);
    Toastr::success('প্রোফাইল সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
     public function edit_profile(Request $request){

    $edit=DB::table('profile')->first();
    return view('admin.edit_profile')->with('edit', $edit); 
}
   public function update_profile(Request $request){
   $data=array();
   $data['phone']=$request->phone;
   $data['email']=$request->email;
   $data['fb']=$request->fb;
   $data['twitter']=$request->twitter;
   $data['youtube']=$request->youtube;
   $data['linkedin']=$request->linkedin;
   $data['google']=$request->google;

  DB::table('profile')->update($data);
  Toastr::success('প্রোফাইল সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/admin/profile');
}
public function index_footer(Request $request){
        $footer =DB::table('footer')->first();
      return view('admin.footer')->with('footer', $footer);
    }
       public function add_footer(Request $request){
       
    $data=array();
    $data['one_linkn']=$request->one_linkn;
    $data['one_linka']=$request->one_linka;
    $data['two_linkn']=$request->two_linkn;
    $data['two_linka']=$request->two_linka;
    $data['three_linkn']=$request->three_linkn;
    $data['three_linka']=$request->three_linka;
    $data['four_linkn']=$request->four_linkn;
    $data['four_linka']=$request->four_linka;
    $data['five_linkn']=$request->five_linkn;
    $data['five_linka']=$request->five_linka;
    $data['one_servicen']=$request->one_servicen;
    $data['one_servicea']=$request->one_servicea;
    $data['two_servicen']=$request->two_servicen;
    $data['two_servicea']=$request->two_servicea;
    $data['three_servicen']=$request->three_servicen;
    $data['three_servicea']=$request->three_servicea;
    $data['four_servicen']=$request->four_servicen;
    $data['four_servicea']=$request->four_servicea;
    $data['five_servicen']=$request->five_servicen;
    $data['five_servicea']=$request->five_servicea;
    $data['location']=$request->location;
    DB::table('footer')->insert($data);
    Toastr::success('ফুটার সেকশন সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
        public function edit_footer(Request $request){

    $edit=DB::table('footer')->first();
    return view('admin.edit_footer')->with('edit', $edit); 
}
public function update_footer(Request $request){
   $data=array();
    $data['one_linkn']=$request->one_linkn;
    $data['one_linka']=$request->one_linka;
    $data['two_linkn']=$request->two_linkn;
    $data['two_linka']=$request->two_linka;
    $data['three_linkn']=$request->three_linkn;
    $data['three_linka']=$request->three_linka;
    $data['four_linkn']=$request->four_linkn;
    $data['four_linka']=$request->four_linka;
    $data['five_linkn']=$request->five_linkn;
    $data['five_linka']=$request->five_linka;
    $data['one_servicen']=$request->one_servicen;
    $data['one_servicea']=$request->one_servicea;
    $data['two_servicen']=$request->two_servicen;
    $data['two_servicea']=$request->two_servicea;
    $data['three_servicen']=$request->three_servicen;
    $data['three_servicea']=$request->three_servicea;
    $data['four_servicen']=$request->four_servicen;
    $data['four_servicea']=$request->four_servicea;
    $data['five_servicen']=$request->five_servicen;
    $data['five_servicea']=$request->five_servicea;
    $data['location']=$request->location;

  DB::table('footer')->update($data);
  Toastr::success('ফুটার সেকশন সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/admin/footer');
}
 public function add_seo(Request $request){
      return view('admin.add_seo');
    }
 public function all_seo(Request $request){
  $cat = DB::table('page_seo')->get();
      return view('admin.all_seo')->with('cat', $cat);
    }
 public function post_seo(Request $request){
       
    $data=array();
    $data['page']=$request->page;
    $data['link']=$request->link;
    DB::table('page_seo')->insert($data);
    Toastr::success('SEO সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
    public function edit_seo($seo_id){

    $edit=DB::table('page_seo')->where('seo_id', $seo_id)->first();
    return view('admin.edit_seo')->with('edit', $edit); 
}
   public function update_seo(Request $request,$seo_id){
   $data=array();
   $data['page']=$request->page;
   $data['link']=$request->link;

  DB::table('page_seo')->where('seo_id', $seo_id)->update($data);
  Toastr::success('SEO সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/admin/all-seo');
}
  public function insert_seo($seo_id){
    $id=DB::table('page_seo')->where('seo_id', $seo_id)->first();
    return view('admin.insert_seo')->with('id', $id); 
}
 public function post_insert(Request $request,$seo_id){
       
    $data=array();
    $data['title']=$request->title;
    $data['des']=$request->des;
    $data['keyword']=$request->keyword;
    DB::table('page_seo')->where('seo_id', $seo_id)->update($data);
    Toastr::success('SEO সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
    public function edit_insert($seo_id){
      $edit = DB::table('page_seo')->where('seo_id', $seo_id)->first();
      return view('admin.edit_insert_seo')->with('edit', $edit);
    }
    public function update_insert(Request $request,$seo_id){
   $data=array();
   $data['title']=$request->title;
   $data['des']=$request->des;
   $data['keyword']=$request->keyword;

  DB::table('page_seo')->where('seo_id', $seo_id)->update($data);
  Toastr::success('SEO সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/admin/insert_seo/'.$request->seo_id);
}
  public function logout(){
  Session::flush();
  return Redirect::to('/admin');
 }
 public function home(Request $request){
    $email=$request->email;
    $pass=md5($request->pass);
    $result=DB::table('admin')
    ->where('email',$email)
    ->where('pass',$pass)
    ->first();
    if ($result){
      session::put('email',$result->email);
      session::put('id',$result->id);
      
      return Redirect::to('/admin/home');
          }else{
            session::put('messege','Email or Password Invalid');
            return Redirect::to('/admin');
          }
   }
    public function add_credit(Request $request){
      $cat = DB::table('credit')->get();
      return view('software.add_credit')->with('cat', $cat);
    }
    public function add_framework(Request $request){
      $cat = DB::table('framework')->get();
      return view('software.add_framework')->with('cat', $cat);
    }
     public function add_language(Request $request){
      $cat = DB::table('language')->get();
      return view('software.add_language')->with('cat', $cat);
    }
    
    public function post_credit(Request $request){
       
    $data=array();
    $data['name']=$request->name;
    $data['link']=$request->link;
    DB::table('credit')->insert($data);
    Toastr::success('ক্রেডিট সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
    public function post_framework(Request $request){
       
    $data=array();
    $data['name']=$request->name;
    DB::table('framework')->insert($data);
    Toastr::success('ফ্রেমওয়ার্ক সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
    public function post_language(Request $request){
       
    $data=array();
    $data['name']=$request->name;
    DB::table('language')->insert($data);
    Toastr::success('ল্যাংগুয়েজ সফলভাবে এড হয়েছে ', 'Success');
    return Redirect::back();
    }
     public function edit_credit($credit_id){

   $edit=DB::table('credit')->where('credit_id', $credit_id)->first();
   return view('software.edit_credit')->with('edit', $edit); 
}
 public function edit_language($lan_id){

   $edit=DB::table('language')->where('lan_id', $lan_id)->first();
   return view('software.edit_language')->with('edit', $edit); 
}
 public function edit_framework($frame_id){

   $edit=DB::table('framework')->where('frame_id', $frame_id)->first();
   return view('software.edit_framework')->with('edit', $edit); 
}
public function update_credit(Request $request,$credit_id){
  $data=array();
  $data['name']=$request->name;
  $data['link']=$request->link;

  DB::table('credit')
    ->where('credit_id',$credit_id)
  ->update($data);
  Toastr::success('ক্রেডিট সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/software/add-credit');
}
public function update_framework(Request $request,$frame_id){
  $data=array();
  $data['name']=$request->name;

  DB::table('framework')
    ->where('frame_id',$frame_id)
  ->update($data);
  Toastr::success('ফ্রেমওয়ার্ক সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/software/add-framework');
}
    public function update_language(Request $request,$lan_id){
  $data=array();
  $data['name']=$request->name;

  DB::table('language')
    ->where('lan_id',$lan_id)
  ->update($data);
  Toastr::success('ল্যাংগুয়েজ সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/software/add-language');
}
}
