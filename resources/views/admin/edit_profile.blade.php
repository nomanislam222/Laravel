@extends('layout.admin')
@section('content')
<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<h1 style="text-align: center;">Edit Profile Info</h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('/admin/update-profile')}}">
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
												<input type="text" class="form-control" value="{{$edit->phone}}" name="phone" required="">
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-lg-3 control-label">Email:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->email}}" name="email" required="">
											</div>
										</div>
                                          <h1 style="color: red">Links*:</h1>
										<div class="form-group">
											<label class="col-lg-3 control-label">Facebook:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->fb}}" name="fb" required="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Twitter:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->twitter}}" name="twitter" required="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Youtube:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->youtube}}" name="youtube" required="">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Linkedin:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->linkedin}}" name="linkedin" required="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Google+:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->google}}" name="google" required="">
											</div>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Update form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>

							</div>
		<div class="col-md-2"></div>
		@endsection