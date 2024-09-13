@extends('layout.admin')

@section('content')
	<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			
			<h1 style="text-align: center;">Page Seo </h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('/admin/update-insert_seo/'.$edit->seo_id)}}">
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
												<label class="col-lg-3 control-label">Seo title:</label>

											<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="Enter Seo Title"  name="title" maxlength="50" value="{{$edit->title}}" required="">
									<small style="color: red">Only 50 charecters*</small>
											</div>
</div>
													<div class="form-group">
											<label class="col-lg-3 control-label">Seo Description:</label>
											<div class="col-lg-9">
		<textarea rows="8" cols="8" class="form-control"  maxlength="140" name="des">{{$edit->des}}</textarea>
		<small style="color: red">Only 140 charecters*</small>
												
											</div>
										</div>
												<div class="form-group">
											<label class="col-lg-3 control-label">Seo Keywords:</label>
											<div class="col-lg-9">
		<textarea rows="6" cols="8" class="form-control" maxlength="80" name="keyword">{{$edit->keyword}}</textarea>
		<small style="color: red">Only 80 charecters*</small>
												
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
@push('js')
	<script src="{{asset('backend/global_assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/demo_pages/form_select2.js')}}"></script>
	@endpush