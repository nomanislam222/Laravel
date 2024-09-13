@extends('layout.admin')
@section('content')
<?php
	$cat = DB::table('pro_category')->where('sector_id', 1)->get();
?>
<div class="sidebar-category">
									<div class="category-title">
									<h3>Software</h3>
									</div>

									<div class="category-content">
										<div class="row">
												@foreach($cat as $value)
											<div class="col-xs-4">
												<button style="margin-bottom: 20px" class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><h2><?php
	$cat = DB::table('soft_details')->where('category_id', $value->category_id)->count('soft_id');
	echo $cat;
?></h2><span>{{$value->name}}</span></button>
											</div>

												@endforeach
										</div>
									</div>
								</div>


								<?php
	$cat = DB::table('pro_category')->where('sector_id', 2)->get();
?>
<div class="sidebar-category">
									<div class="category-title">
									<h3>Template</h3>
									</div>

									<div class="category-content">
										<div class="row">
												@foreach($cat as $value)
											<div class="col-xs-4">
												<button style="margin-bottom: 20px" class="btn bg-purple-300 btn-block btn-float btn-float-lg" type="button"><h2><?php
	$cat = DB::table('template')->where('category_id', $value->category_id)->count('template_id');
	echo $cat;
?></h2><span>{{$value->name}}</span></button>
											</div>

												@endforeach
										</div>
									</div>
								</div>

																<?php
	$cat = DB::table('pro_category')->where('sector_id', 3)->get();
?>
<div class="sidebar-category">
									<div class="category-title">
									<h3>Graphics Design</h3>
									</div>

									<div class="category-content">
										<div class="row">
												@foreach($cat as $value)
											<div class="col-xs-4">
												<button style="margin-bottom: 20px" class="btn bg-warning-400 btn-block btn-float btn-float-lg" type="button"><h2><?php
	$cat = DB::table('graphics_img')->where('category_id', $value->category_id)->count('image_id');
	echo $cat;
?> </h2><span>{{$value->name}}</span></button>
											</div>

												@endforeach
										</div>
									</div>
								</div>
@endsection