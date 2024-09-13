@extends('layout.admin')
@section('content')

		<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<h1 style="text-align: center;">Edit Language</h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('software/update-language/'.$edit->lan_id)}}">
                           {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Edit Language Form</h5>
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
											<label class="col-lg-3 control-label">Language ID:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{$edit->lan_id}}" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Language Name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  name="name" value="{{$edit->name}}">
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