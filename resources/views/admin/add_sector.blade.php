@extends('layout.admin')
@section('content')

		<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<h1 style="text-align: center;">Add Sector</h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('/admin/add-sector')}}">
                           {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Sector Form</h5>
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
											<label class="col-lg-3 control-label">Sector Name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Enter Sector Name" name="name" required="">
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-lg-3 control-label">Sector Description:</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter Sector Description" name="des"></textarea>
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

@endsection