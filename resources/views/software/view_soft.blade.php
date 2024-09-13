@extends('layout.admin')
@section('content')



	<!-- Main content -->
			<div class="content-wrapper">

			


				<!-- Content area -->
				<div class="content">

					<!-- Detached content -->
					<div class="container-detached">
						<div class="content-detached">

							<!-- Post -->
							<div  class="row">
							<div class="col-md-9">
							<div class="panel">
								<div class="panel-body">
									<div class="content-group-lg">
										<div class="content-group text-center">
											 <?php
                                $nam= DB::table('pro_category')->where('category_id', $soft->category_id)->first();
                                ?>
                                
											 <h1>SATT {{$soft->name}} Management System</h1>
                                            <p style="font-size: 20px;margin-top: -5px">({{$nam->name}})</p>
											<a href="#" class="display-inline-block">
												<img src="{{asset('storage/app/public/'.$soft->main_pic_e)}}" class="img-responsive" alt="">
											</a>
										</div>

										<h3 class="text-semibold mb-5">
											<a href="#" class="text-default">Application Feature</a>
										</h3>

										<ul class="list-inline list-inline-separate text-muted content-group">
											<li><a class="text-muted">Created</a></li>
											<li>{{$soft->create_d}}</li>
											<li><a class="text-muted">Updated</a></li>
											<li><a class="text-muted">{{$soft->update_d}}</a></li>
										</ul>

										<div class="content-group">
											{{$soft->feature_des_e}}
											<br>
                                         <h2 style="text-align: center;">Software Details(English)</h2>
											{!!$soft->details_e!!}
										</div>

									</div>

									<div class="content-group text-center">
										<br><br>
										<h1 style="text-align: center;">স্যাট {{$soft->name}} ম্যানেজমেন্ট সিস্টেম </h1>
										<a href="#" class="display-inline-block">
												<img src="{{asset('storage/app/public/'.$soft->main_pic_b)}}" class="img-responsive" alt="">
											</a>
										</div>
										<div class="content-group-lg">
										<h3 class="text-semibold">অ্যাপ্লিকেশন ফিচার</h3>
                                         {{$soft->feature_des_b}}
                                         <br>
                                         <h2 style="text-align: center;">Software Details(Bangla)</h2>
										{!!$soft->details_b!!}
									</div>

									<div>
									
									</div>
								</div>
							</div>
						</div>
							<!-- /post -->

<div class="col-md-3">

									<!-- Detached sidebar -->
					<div class="sidebar-detached">
						<div class="sidebar sidebar-default sidebar-separate">
							<div class="sidebar-content">

							

									<!-- Categories -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Credit</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding">
										<ul class="navigation">
											@foreach($credit as $cre)
											<li>
												<a href="{{$cre->link}}">
													<span class="text-muted text-size-small text-regular pull-right"></span>
													<i class="icon-google"></i>
													{{$cre->name}}
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								<!-- /categories -->

								<!-- Share -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Framework</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding-bottom text-left">
										<ul class="list-inline no-margin">
											@foreach($frame as $fram)
											<li>
												<a href="#" class="btn bg-indigo btn-icon content-group">
													{{$fram->name}}
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								<!-- /share -->


								<!-- Tags -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Language</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding-bottom">
										<ul class="list-inline list-inline-condensed no-margin-bottom">
											@foreach($language as $lan)
											<li>
												<a href="#">
													<span class="label border-left-success label-striped content-group">{{$lan->name}}</span>
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								<!-- /tags -->


							


							</div>
						</div>
					</div>
		            <!-- /detached sidebar -->


</div>
</div>


				
				</div>
				<!-- /content area -->

			</div>
@endsection
@push('js')
	<script src="{{asset('backend/global_assets/js/demo_pages/blog_single.js')}}"></script>
	@endpush