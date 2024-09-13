@extends('layout.admin')

@section('content')

	<!-- Basic layout-->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<h1 style="text-align: center;">Graphics Category </h1>
							
								 <form method="POST" class="form-horizontal" action="{{url('/graphics/add-design')}}" enctype="multipart/form-data">
                           {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Add Graphics Design Form</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>
 @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Image Size must be less  than 2 MB.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
				
									<div class="panel-body">
                                               <div class="form-group">
												<label class="col-lg-3 control-label">Category Name:</label>

											<div class="col-lg-9">
										<select name="category_id" class="select-results-color" >
										<option>Choose...</option>
										@foreach($category as $cat)

										<option value="{{$cat->category_id}}">{{$cat->name}}</option>
										@endforeach
										</select>
									

											</div>
</div>
													<div class="form-group">
											<label class="col-lg-3 control-label">Image:</label>
											<div class="col-lg-9">
												<input type="file" class="form-control"  name="pic" required="">
											</div>
										</div>
											<div class="form-group">
											<label class="col-lg-3 control-label">Title:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" maxlength="50"  name="title">
												<small style="color: red">Only 50 charecters</small>
											</div>
										</div>
											<div class="form-group">
											<label class="col-lg-3 control-label">Alt:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  name="alt" maxlength="50">
												<small style="color: red">Only 50 charecters</small>
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