@extends('layout.admin')
@section('content')


			@if(empty($profile->phone))
		<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<h1 style="text-align: center;">Add Profile Info</h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('/admin/add-profile')}}">
                           {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Profile Form</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
										<div class="form-group">
											<label class="col-lg-3 control-label">Contact No:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="(+880)" placeholder="Enter Phone Number" name="phone" required="">
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-lg-3 control-label">Email:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Email Link" name="email" required="">
											</div>
										</div>
                                          <h1 style="color: red">Links*:</h1>
										<div class="form-group">
											<label class="col-lg-3 control-label">Facebook:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Facebook Link" name="fb" required="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Twitter:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Twitter Link" name="twitter" required="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Youtube:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Youtube Link" name="youtube" required="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Linkedin:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Linkedin Link" name="linkedin" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Google+:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Google+ Link" name="google" required="">
											</div>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>

							</div>
		<div class="col-md-2"></div>
		@else
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<br><br>
								<div class="content-group">
								<div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
									<div class="content-group-sm">
										<h5 class="text-semibold no-margin-bottom">
											SATT IT
										</h5>

										<span class="display-block">The Mission Of Change</span>
									</div>

									<a href="#" class="display-inline-block content-group-sm">
										<img src="{{asset('frontend/img/fevicon.png')}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
									</a>

									  <h1 style="text-align: center;">Profile Section</h1>
								</div>

								<div class="panel panel-body no-border-top no-border-radius-top">
									<div class="form-group mt-5">
										<label class="text-semibold">Full name:</label>
										<span class="pull-right-sm">SATT IT</span>
									</div>

									<div class="form-group">
										<label class="text-semibold">Phone number:</label>
										<span class="pull-right-sm">{{$profile->phone}}</span>
									</div>

									<div class="form-group">
										<label class="text-semibold">Email:</label>
										<span class="pull-right-sm"><a href="#">{{$profile->email}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">Facebook Link:</label>
										<span class="pull-right-sm"><a href="{{$profile->fb}}">{{$profile->fb}}</a></span>
									</div><div class="form-group">
										<label class="text-semibold">Twitter:</label>
										<span class="pull-right-sm"><a href="#">{{$profile->twitter}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">Youtube Link:</label>
										<span class="pull-right-sm"><a href="{{$profile->youtube}}">{{$profile->youtube}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">Linkedin Link:</label>
										<span class="pull-right-sm"><a href="#">{{$profile->linkedin}}</a></span>
									</div>
									<div class="text-center">
											<button class="btn btn-primary"><a style="color: white" href="{{URL::to('/admin/edit-profile')}}">Edit form </a><i class="icon-pencil6 position-center"></i></button>
										</div>

								</div>
							</div>

</div>
		<div class="col-md-3"></div>
							@endif

@endsection