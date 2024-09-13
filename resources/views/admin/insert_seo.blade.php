@extends('layout.admin')

@section('content')
@if(!empty($id->des))
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

									  <h1 style="text-align: center;">{{$id->page}} Seo</h1>
								</div>

								<div class="panel panel-body no-border-top no-border-radius-top">

									<div class="form-group">
										<label class="text-semibold"><b>Page Name:</b></label>
										<span class="pull-left-sm">&nbsp;&nbsp; &nbsp; &nbsp;{{$id->page}}</span>
									</div>

									<div class="form-group">
										<label class="text-semibold"><b>Title:</b></label>
										<span class="pull-left-sm">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$id->title}}</span>
									</div><div class="form-group">
										<label class="text-semibold"><b>Description:</b></label><span class="pull-left-sm">&nbsp; &nbsp; &nbsp; &nbsp;{{$id->des}}</span>
									</div>
									<div class="form-group">
										<label class="text-bold">Keywords:</label>
										<span class="pull-left-sm">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$id->keyword}}</span>
									</div>

								
									<div class="text-center">
											<button class="btn btn-primary"><a style="color: white" href="{{URL::to('/admin/edit-insert_seo/'.$id->seo_id)}}">Edit form </a><i class="icon-pencil6 position-center"></i></button>
										</div>

								</div>
							</div>

</div>
		<div class="col-md-3"></div>
			@else
	<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			
			<h1 style="text-align: center;">Page Seo </h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('/admin/insert_seo/'.$id->seo_id)}}">
                           {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Add Page Seo Form</h5>
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
									<input type="text" maxlength="50" class="form-control" placeholder="Enter Seo Title"  name="title" required="">
									<small style="color: red">Only 50 charecters*</small>
											</div>
</div>
													<div class="form-group">
											<label class="col-lg-3 control-label">Seo Description:</label>
											<div class="col-lg-9">
		<textarea rows="8" cols="8" class="form-control" maxlength="140" placeholder="Enter Seo Description" name="des"></textarea>
		<small style="color: red">Only 140 charecters*</small>
												
											</div>
										</div>
										
												<div class="form-group">
											<label class="col-lg-3 control-label">Seo Keywords:</label>
											<div class="col-lg-9">
		<textarea rows="5" cols="8" maxlength="80" class="form-control" placeholder="Enter Seo Keywords" name="keyword"></textarea>
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
							@endif
		<div class="col-md-2"></div>

@endsection
@push('js')
	<script src="{{asset('backend/global_assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/demo_pages/form_select2.js')}}"></script>
	@endpush