<?php

namespace App\Http\Controllers;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
      public function index(Request $request){
    	return view('software.add_category');
    }
      public function add_category(Request $request){
       
    $data=array();
	$data['category_id']=$request->category_id;
    $data['sector_id']=$request->sector_id;
    $data['name']=$request->name;
	$data['des']=$request->des;
	DB::table('pro_category')->insert($data);
	Toastr::success('ক্যাটাগরি সফলভাবে এড হয়েছে ', 'Success');
	return Redirect::back();
    }
     public function all_category(Request $request){
     	$cat = DB::table('pro_category')->where('sector_id', '1')->get();
      return view('software.all_category')->with('cat', $cat);
  }
  public function edit_category($category_id){

 $edit=DB::table('pro_category')->where('category_id', $category_id)->first();
  return view('software.edit_category')->with('edit', $edit); 
}
public function update_category(Request $request,$category_id){
  $data=array();
  $data['name']=$request->name;
  $data['des']=$request->des;

  DB::table('pro_category')
    ->where('category_id',$category_id)
  ->update($data);
  Toastr::success('ক্যাটাগরি সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/software/all-category');
}
public function index_g(Request $request){
      return view('graphics.add_category');
    }
      public function add_gcategory(Request $request){

        $request->validate([
          'name' => 'required|unique:pro_category|max:255'
        ]);
       
    $data=array();
  $data['category_id']=$request->category_id;
    $data['sector_id']=$request->sector_id;
    $data['name']=$request->name;
    $data['slug']=str_slug($request->name);
  $data['des']=$request->des;
  DB::table('pro_category')->insert($data);
  Toastr::success('ক্যাটাগরি সফলভাবে এড হয়েছে ', 'Success');
  return Redirect::back();
    }
     public function all_gcategory(Request $request){
      $cat = DB::table('pro_category')->where('sector_id', '3')->get();
      return view('graphics.all_category')->with('cat', $cat);
  }
  public function edit_gcategory($category_id){

 $edit=DB::table('pro_category')->where('category_id', $category_id)->first();
  return view('graphics.edit_category')->with('edit', $edit); 
}
public function update_gcategory(Request $request,$category_id){
  $data=array();
  $data['name']=$request->name;
  $data['des']=$request->des;

  DB::table('pro_category')
  ->where('category_id',$category_id)
  ->update($data);
  Toastr::success('ক্যাটাগরি সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/graphics/all-category');
}

public function index_t(Request $request){
      return view('template.add_category');
    }
      public function add_tcategory(Request $request){
         $request->validate([
          'name' => 'required|unique:pro_category|max:255'
        ]);
    $data=array();
  $data['category_id']=$request->category_id;
    $data['sector_id']=$request->sector_id;
    $data['name']=$request->name;
     $data['slug']=str_slug($request->name);
  $data['des']=$request->des;
  DB::table('pro_category')->insert($data);
  Toastr::success('ক্যাটাগরি সফলভাবে এড হয়েছে ', 'Success');
  return Redirect::back();
    }
     public function all_tcategory(Request $request){
      $cat = DB::table('pro_category')->where('sector_id', '2')->get();
      return view('template.all_category')->with('cat', $cat);
  }
  public function edit_tcategory($category_id){

 $edit=DB::table('pro_category')->where('category_id', $category_id)->first();
  return view('template.edit_category')->with('edit', $edit); 
}
public function update_tcategory(Request $request,$category_id){
  $data=array();
  $data['name']=$request->name;
  $data['des']=$request->des;

  DB::table('pro_category')
  ->where('category_id',$category_id)
  ->update($data);
  Toastr::success('ক্যাটাগরি সফলভাবে পরিবর্তন করা হয়েছে ', 'Success');
  return Redirect::to('/template/all-category');
}
}
