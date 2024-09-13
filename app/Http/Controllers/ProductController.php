<?php

namespace App\Http\Controllers;
use DB;
use File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_design(Request $request){
    	$category=DB::table('pro_category')->where('sector_id', '3')->get();
    	return view('graphics.add_design')->with('category', $category);
    }

    public function post_design(Request $request)
    {
       request()->validate([
            'pic' => 'image|max:2048',
        ]);
    	$data=array();
       $data['category_id']=$request->category_id;
       $image = $request->pic;
       $filepath = 'backend/graphics' . DIRECTORY_SEPARATOR ;
       $data['pic'] = $image->store($filepath);
       $img = Image::make($image)->resize(320, 240);
       $data['title']=$request->title;
       $data['alt']=$request->alt;
       DB::table('graphics_img')->insert($data);
       Toastr::success('ডিজাইন সফলভাবে এড হয়েছে ', 'Success');
      return Redirect::back();
  }
  public function all_gdesign(Request $request){
  	$cat = DB::table('graphics_img')
  	->join('pro_category','graphics_img.category_id','=','pro_category.category_id')
  	->get();
      return view('graphics.all_design')->with('cat', $cat);
  }

  public function edit_gdesign($image_id){
  $edit=DB::table('graphics_img')->where('image_id', $image_id)
  ->join('pro_category','graphics_img.category_id','=','pro_category.category_id')
  ->first();
  return view('graphics.edit_design')->with('edit', $edit); 
  }
  public function update_gdesign(Request $request, $image_id){
    request()->validate([
            'pic' => 'image|max:2048',
        ]);
  $edit=DB::table('graphics_img')->where('image_id', $image_id)->first();
  $data=array();
  	if($request->pic){
  		if(File::exists('storage/'.$edit->pic)){
  			File::delete('storage/'.$edit->pic);
  		}
  		$image = $request->pic;
	$filepath = 'backend/graphics' . DIRECTORY_SEPARATOR ;
	$data['pic'] = $image->store($filepath);
  	} else{
  		$data['pic'] = $edit->pic;
  	}
    $data['title'] = $request->title;
    $data['alt'] = $request->alt;
 
 DB::table('graphics_img')->where('image_id', $image_id)->update($data);
 Toastr::success('ডিজাইন সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
 return Redirect::to('/graphics/all-design');
  }
   public function add_template(Request $request){
    	$category=DB::table('pro_category')->where('sector_id', '2')->get();
    	return view('template.add_template')->with('category', $category);
    }
    public function post_template(Request $request)
    {
       request()->validate([
            'pic' => 'image|max:2048',
        ]);
       $data=array();
       $data['category_id']=$request->category_id;
       $image = $request->pic;
		$filepath = 'backend/template' . DIRECTORY_SEPARATOR ;
		$data['pic'] = $image->store($filepath);
       $data['link']=$request->link;
       DB::table('template')->insert($data);
       Toastr::success('টেমপ্লেট সফলভাবে এড হয়েছে ', 'Success');
      return Redirect::back();
  }
  
   public function all_tdesign(Request $request){
  	$cat = DB::table('template')
  	->join('pro_category','template.category_id','=','pro_category.category_id')
  	->get();
      return view('template.all_template')->with('cat', $cat);
  }
  public function edit_tdesign($template_id){
  $edit=DB::table('template')->where('template_id', $template_id)
  ->join('pro_category','template.category_id','=','pro_category.category_id')
  ->first();
  return view('template.edit_template')->with('edit', $edit); 
  }
  public function update_tdesign(Request $request, $template_id){
     request()->validate([
            'pic' => 'image|max:2048',
        ]);
  $edit=DB::table('template')->where('template_id', $template_id)->first();
  $data=array();
  	if($request->pic){
  		if(File::exists('storage/'.$edit->pic)){
  			File::delete('storage/'.$edit->pic);
  		}
  		$image = $request->pic;
	$filepath = 'backend/template' . DIRECTORY_SEPARATOR ;
	$data['pic'] = $image->store($filepath);
  	} else{
  		$data['pic'] = $edit->pic;
  	}

       $data['link']=$request->link;
 
 DB::table('template')->update($data);
 Toastr::success('টেমপ্লেট  সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
 return Redirect::to('/template/all-template');
  }
 public function add_soft(Request $request)
    {
      $category =DB::table('pro_category')->where('sector_id', '1')->get();
      $credit =DB::table('credit')->get();
      $framework =DB::table('framework')->get();
      $language =DB::table('language')->get();
      return view('software.add_software')->with('category', $category)->with('credit', $credit)->with('language', $language)->with('framework', $framework);
  }
  public function post_soft(Request $request){
       $data=array();
       $data['name']=$request->name;
       $data['link']=$request->link;
       $data['category_id']=$request->category_id;
       if($request->main_pic_e || $request->main_pic_b || $request->icon_pic || $request->feature_pic){
       $main_e = $request->main_pic_e;
       $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
       $data['main_pic_e'] = $main_e->store($filepath);
       $main_b = $request->main_pic_b;
       $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
       $data['main_pic_b'] = $main_b->store($filepath);
       $feature_pic = $request->feature_pic;
       $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
       $data['feature_pic'] = $feature_pic->store($filepath);
       $icon = $request->icon_pic;
       $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
       $data['icon_pic'] = $icon->store($filepath);
  }
       $data['feature_des_e']=$request->feature_des_e;
       $data['feature_des_b']=$request->feature_des_b;
       $data['details_e']=$request->details_e;
       $data['details_b']=$request->details_b;
       $data['create_d']=$request->create_d;
       $data['update_d']=$request->update_d;
       $data['seo_title']=$request->seo_title;
       $data['seo_des']=$request->seo_des;
       $data['seo_keyword']=$request->seo_keyword;
       DB::table('soft_details')->insert($data);


       $soft_id = DB::getPdo()->lastInsertId();

     
      
        for ($i = 0; $i < count($request->credit_id); $i++) {
        
       $credit = array( );
       $credit['soft_id']=$soft_id;
       $credit['credit_id']=$request->credit_id[$i];
        DB::table('soft_credit')->insert($credit);
       }

       

    for ($i = 0; $i < count($request->frame_id); $i++) {
        
       $framework = array( );
       $framework['soft_id']=$soft_id;
       $framework['frame_id']=$request->frame_id[$i];
        DB::table('soft_framework')->insert($framework);
       }

       
        for ($i = 0; $i < count($request->lan_id); $i++) {
        
       $language = array( );
       $language['soft_id']=$soft_id;
       $language['lan_id']=$request->lan_id[$i];
        DB::table('soft_language')->insert($language);
       }

  Toastr::success('সফটওয়্যার সফলভাবে এড হয়েছে ', 'Success');
      return Redirect::back();

  }
  public function delete_tdesign(Request $request, $template_id){
    $edit=DB::table('template')->where('template_id', $template_id)->first();
      if(File::exists('storage/'.$edit->pic)){
        File::delete('storage/'.$edit->pic);
      }
    DB::table('template')->where('template_id', $template_id)->delete();
    Toastr::error('টেম্পলেট সফলভাবে ডিলিট করা হয়েছে ', 'Deleted');
     return Redirect::back();
  }
    public function delete_gdesign(Request $request, $image_id){
      $edit=DB::table('graphics_img')->where('image_id', $image_id)->first();
      if(File::exists('storage/'.$edit->pic)){
        File::delete('storage/'.$edit->pic);
      }
    DB::table('graphics_img')->where('image_id', $image_id)->delete();
    Toastr::error('ডিজাইন সফলভাবে ডিলিট করা হয়েছে ', 'Deleted');
     return Redirect::back();
  }
   public function delete_soft(Request $request, $soft_id){
    $edit=DB::table('soft_details')->where('soft_id', $soft_id)->first();
      if(File::exists('storage/'.$edit->feature_pic)){
        File::delete('storage/'.$edit->feature_pic);
        File::delete('storage/'.$edit->icon_pic);
        File::delete('storage/'.$edit->main_pic_e);
        File::delete('storage/'.$edit->main_pic_b);
}
    DB::table('soft_details')->where('soft_id', $soft_id)->delete();
    DB::table('soft_credit')->where('soft_id', $soft_id)->delete();
    DB::table('soft_language')->where('soft_id', $soft_id)->delete();
    DB::table('soft_framework')->where('soft_id', $soft_id)->delete();
    Toastr::error('সফটওয়্যার সফলভাবে ডিলিট করা হয়েছে ', 'Deleted');
     return Redirect::back();
  }
  
 public  function all_soft(Request $request){
  $cat= DB::table('soft_details')
  ->get();
  return view('software.all_software')->with('cat', $cat);
 }
  public  function edit_soft($soft_id){
     $creditt =DB::table('soft_credit')->where('soft_id', $soft_id)
      ->join('credit','soft_credit.credit_id','=','credit.credit_id')->get();
    $credit= DB::table('credit')->get();
    $edit= DB::table('soft_details')->where('soft_id', $soft_id)->first();
  return view('software.edit_software')->with('edit', $edit)->with('credit', $credit)->with('creditt', $creditt);
 }
 public function update_soft(Request $request,$soft_id){
  $edit=DB::table('soft_details')->where('soft_id', $soft_id)->first();
       $data=array();
       $data['name']=$request->name;
       $data['link']=$request->link;
        if($request->main_pic_e){
      if(File::exists('storage/'.$edit->main_pic_e)){
        File::delete('storage/'.$edit->main_pic_e);
      }
      $image = $request->main_pic_e;
  $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
  $data['main_pic_e'] = $image->store($filepath);
    } else{
      $data['main_pic_e'] = $edit->main_pic_e;
    }
      if($request->main_pic_b){
      if(File::exists('storage/'.$edit->main_pic_b)){
        File::delete('storage/'.$edit->main_pic_b);
      }
      $image = $request->main_pic_b;
  $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
  $data['main_pic_b'] = $image->store($filepath);
    } else{
      $data['main_pic_b'] = $edit->main_pic_b;
    }
      if($request->feature_pic){
      if(File::exists('storage/'.$edit->feature_pic)){
        File::delete('storage/'.$edit->feature_pic);
      }
      $image = $request->feature_pic;
  $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
  $data['feature_pic'] = $image->store($filepath);
    } else{
      $data['feature_pic'] = $edit->feature_pic;
    }
      if($request->icon_pic){
      if(File::exists('storage/'.$edit->icon_pic)){
        File::delete('storage/'.$edit->icon_pic);
      }
      $image = $request->icon_pic;
  $filepath = 'backend/soft' . DIRECTORY_SEPARATOR ;
  $data['icon_pic'] = $image->store($filepath);
    } else{
      $data['icon_pic'] = $edit->icon_pic;
    }
       $data['feature_des_e']=$request->feature_des_e;
       $data['feature_des_b']=$request->feature_des_b;
       $data['details_e']=$request->details_e;
       $data['details_b']=$request->details_b;
       $data['create_d']=$request->create_d;
       $data['update_d']=$request->update_d;
       $data['seo_title']=$request->seo_title;
       $data['seo_des']=$request->seo_des;
       $data['seo_keyword']=$request->seo_keyword;
       DB::table('soft_details')->where('soft_id', $soft_id)->update($data);


      $soft_id = DB::getPdo()->lastInsertId();

     
     



  Toastr::success('সফটওয়্যার সফলভাবে পরিবর্তন করা  হয়েছে ', 'Success');
      return Redirect::to('/software/all-software');

  }
  public function view_soft($soft_id){
      $soft=DB::table('soft_details')->where('soft_id', $soft_id)->first();
      $frame =DB::table('soft_framework')->where('soft_id', $soft_id)
      ->join('framework','soft_framework.frame_id','=','framework.frame_id')->get(); 
      $language =DB::table('soft_language')->where('soft_id', $soft_id)
      ->join('language','soft_language.lan_id','=','language.lan_id')->get();
       $credit =DB::table('soft_credit')->where('soft_id', $soft_id)
      ->join('credit','soft_credit.credit_id','=','credit.credit_id')->get();
    return view('software.view_soft')->with('soft', $soft)->with('frame', $frame)->with('language', $language)->with('credit', $credit);
  }
 
}
