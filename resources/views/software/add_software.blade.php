@extends('layout.admin')
@section('content')

<br><br><br>
	<!-- Centered forms -->
					<div class="row">
						<div class="col-md-12">
							<form class="form-horizontal"  method="POST" action="{{url('/software/add-software')}}" enctype="multipart/form-data">
	                            {{ csrf_field() }}
								<div class="panel panel-flat">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-10 col-md-offset-1">
												<h5 class="panel-title">Add Software form</h5>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>
										</div>
									</div>

									<div class="panel-body">
										<div class="row">
											<div class="col-md-10 col-md-offset-1">
												<div class="form-group">
													<label class="col-lg-3 control-label">Software Name:</label>
													<div class="col-lg-9 input-group">
														<span class="input-group-addon" >SATT</span>
									    	<input type="text" class="form-control" placeholder="Enter Main Name" aria-describedby="sizing-addon2" name="name" required=""><span class="input-group-addon" id="sizing-addon2">Management Software</span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Link Address:</label>
													<div class="col-lg-9 input-group">
														<span class="input-group-addon"><li class="icon-link"></li></span>
											<input type="text" class="form-control" placeholder="Enter Link Address"  name="link" required="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Category Name:</label>
													<div class="col-lg-9">
														<select name="category_id" class="select-results-color" required>
												<option>Choose...</option>
												@foreach($category as $cat)
												<option value="{{$cat->category_id}}">{{$cat->name}}</option>
											@endforeach
										</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Main Image(English):</label>
													<div class="col-lg-9">
														<input type="file"  name="main_pic_e" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Main Image(Bangla):</label>
													<div class="col-lg-9">
														<input type="file"  name="main_pic_b">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Feature Image:</label>
													<div class="col-lg-9">
														<input type="file"  name="feature_pic">
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Icon Image:</label>
													<div class="col-lg-9">
														<input type="file"  name="icon_pic">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Feature Description(English):</label>
													<div class="col-lg-9">
														<textarea rows="5" cols="5" class="form-control" placeholder="Enter Feature Description In English" name="feature_des_e" required></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Feature Description(Bangla):</label>
													<div class="col-lg-9">
														<textarea rows="5" cols="5" class="form-control" placeholder="Enter Feature Description In Bangla" name="feature_des_b" required></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label"> Software Details(English):
														<br>
														<p class="btn btn-primary" onclick="myFunction()"> Copy the Source Code </p>
													<textarea rows="10" id="myInput"><div class="card my-2"><div class="card-body">
<h5 class="card-title">....</h5>
<p class="card-text">....</p>
        <!-- Img -->
</div></div>
													</textarea>
													<small style="color: red">Image width must be 690 px</small>
													</label>
													<div class="col-lg-9">
                                                        <textarea  class="form-control" id="summary-ckeditor" name="details_e" required></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label"> Software Details(Bangla):
														<br>
														<p class="btn btn-primary" onclick="myFunction()"> Copy the Source Code </p>
													<textarea rows="10" id="myInput"><div class="card my-2"><div class="card-body">
<h5 class="card-title">....</h5>
<p class="card-text">....</p>
        <!-- Img -->
</div></div>
													</textarea>
													<small style="color: red">Image width must be 690 px</small>
													</label>
													<div class="col-lg-9">
                                                        <textarea class="form-control" id="bangla-ckeditor" name="details_b" required></textarea>
													</div>
												</div>
													<div class="form-group">
													<label class="col-lg-3 control-label">Credits:</label>
													<div class="col-lg-9">
															<select multiple="multiple" data-placeholder="Enter Credits" class="select-icons" name="credit_id[]">
													<optgroup label="Services">
														@foreach($credit as $cre)
														<option value="{{$cre->credit_id}}" data-icon="google">{{$cre->name}}</option>
														
														@endforeach
													</optgroup>
													
												</select>
														
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Language:</label>
													<div class="col-lg-9">
															<select multiple="multiple" data-placeholder="Enter Language Name" class="select-icons" name="lan_id[]">
													<optgroup label="Services">
														@foreach($language as $lan)
														<option value="{{$lan->lan_id}}" data-icon="google">{{$lan->name}}</option>
														
														@endforeach
													</optgroup>
													
												</select>
														
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Framework:</label>
													<div class="col-lg-9">
															<select multiple="multiple" data-placeholder="Enter Framework Name" class="select-icons" name="frame_id[]">
													<optgroup label="Services">
														@foreach($framework as $frame)
														<option value="{{$frame->frame_id}}" data-icon="google">{{$frame->name}}</option>
														
														@endforeach
													</optgroup>
													
												</select>
														
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Craeted Date:</label>
													<div class="col-lg-9 input-group">
														<span class="input-group-addon" ><i class="icon-calendar22"></i></span>
														<input type="text" class="form-control daterange-single" name="create_d">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Update Date:</label>
													<div class="col-lg-9 input-group">
														<span class="input-group-addon" ><i class="icon-calendar22"></i></span>
														<input type="text" class="form-control daterange-single" name="update_d">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Seo Title:</label>
													<div class="col-lg-9">
														<input type="text" name="seo_title" placeholder="Enter Seo Title" class="form-control" maxlength="50">
														<small style="color: red">Only 50 charecters*</small>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Seo Description:</label>
													<div class="col-lg-9">
														<textarea rows="5" cols="5" class="form-control" placeholder="Enter Seo Description" name="seo_des" maxlength="140"></textarea>
														<small style="color: red">Only 140 charecters*</small>
													</div>
												</div>
													<div class="form-group">
													<label class="col-lg-3 control-label">Seo Keywords:</label>
													<div class="col-lg-9">
														<textarea rows="5" cols="5" class="form-control" placeholder="Enter Seo Keywords" name="seo_keyword" maxlength="80"></textarea>
														<small style="color: red">Only 80 charecters*</small>
													</div>
												</div>

												<div class="text-right">
													<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /form centered -->



@endsection
@push('js')

<script  src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
<script>
var editor = CKEDITOR.replace( 'summary-ckeditor', {
    language: 'en',
    extraPlugins: 'notification'
});

editor.on( 'required', function( evt ) {
    editor.showNotification( 'This field is required.', 'warning' );
    evt.cancel();
} );
  
</script>
<script>
var editor1 = CKEDITOR.replace( 'bangla-ckeditor', {
    language: 'en',
    extraPlugins: 'notification'
});

editor1.on( 'required', function( evt ) {
    editor1.showNotification( 'This field is required.', 'warning' );
    evt.cancel();
} );
</script>
<script type="text/javascript">
	function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");
}
</script>
<script src="{{asset('backend/global_assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/wizard_steps.js')}}"></script>
<script src="{{asset('backend/global_assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/form_select2.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/picker_date.js')}}"></script>	

@endpush