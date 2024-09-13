@extends('layout.admin')
@section('content')

		<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<h1 style="text-align: center;">Edit Page Seo </h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('admin/update-seo/'.$edit->seo_id)}}">
                           {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Edit Page Seo Form</h5>
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
											<label class="col-lg-3 control-label">Seo ID:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"   value="{{$edit->seo_id}}" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label">Page Name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  name="page" value="{{$edit->page}}">
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-lg-3 control-label">Page Link:</label>
											<div class="col-lg-9">
		<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li style="list-style: none">https://sattit.com/</li></span>
  <input type="text" class="form-control"  name="link" value="{{$edit->link}}">
</div>
												
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