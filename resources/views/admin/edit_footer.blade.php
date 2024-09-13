 @extends('layout.admin')
@section('content')



  <!-- Wizard with validation -->
  <br>
            <div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Footer Section</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<form class="steps-validation" id="form" action="{{url('/admin/update-footer')}}" method="POST">
	                		{{ csrf_field() }}
							<h6>Useful Link</h6>
							<fieldset>
								<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>1st Link Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control"   aria-describedby="sizing-addon2" value="{{$edit->one_linkn}}" name="one_linkn" >
										</div>
									</div>
									<div class="col-md-6">
										<label>1st Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->one_linka}}" name="one_linka" >
</div>
										</div>

								
								</div>
	<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>2nd Link Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->two_linkn}}" name="two_linkn" >
										</div>
									</div>
									<div class="col-md-6">
										<label>2nd Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->two_linka}}" name="two_linka" >
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>3rd Link Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->three_linkn}}" name="three_linkn" >
										</div>
									</div>
									<div class="col-md-6">
										<label>3rd Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->three_linka}}" name="three_linka">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>4th Link Name: </label>
											<input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->four_linkn}}" name="four_linkn">
										</div>
									</div>
									<div class="col-md-6">
										<label>4th Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->four_linka}}" name="four_linka">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>5th Link Name: </label>
											<input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->five_linkn}}" name="five_linkn">
										</div>
									</div>
									<div class="col-md-6">
										<label>5th Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->five_linka}}" name="five_linka">
</div>
										</div>

								
								</div>
							</fieldset>

						

							<h6>Popular Services</h6>
							<fieldset>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>1st Service Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->one_servicen}}" name="one_servicen" >
										</div>
									</div>
									<div class="col-md-6">
										<label>1st Service Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->one_servicea}}" name="one_servicea">
</div>
										</div>

								
								</div>
	<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>2nd Service Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->two_servicen}}" name="two_servicen"  >
										</div>
									</div>
									<div class="col-md-6">
										<label>2nd Service Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->two_servicea}}" name="two_servicea">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>3rd Service Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->three_servicen}}" name="three_servicen">
										</div>
									</div>
									<div class="col-md-6">
										<label>3rd Service Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->three_servicea}}" name="three_servicea">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>4th Service Name: </label>
											<input type="text" class="form-control" aria-describedby="sizing-addon2" value="{{$edit->four_servicen}}" name="four_servicen">
										</div>
									</div>
									<div class="col-md-6">
										<label>4th Service Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->four_servicea}}" name="four_servicea">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>5th Service Name: </label>
											<input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->five_servicen}}" name="five_servicen">
										</div>
									</div>
									<div class="col-md-6">
										<label>5th Service Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" value="{{$edit->five_servicea}}" name="five_servicea">
</div>
										</div>

								
								</div>
							</fieldset>

							<h6>Contact Us</h6>
							<fieldset>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Email: </label>
											<input type="text" class="form-control" value="info@sattit.com" aria-describedby="sizing-addon2" readonly="">
										</div>
										</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Location:</label>
		                                    <textarea rows="5" cols="5"  class="form-control"  name="location">{{$edit->location}}</textarea>
	                                    </div>
									</div>
								</div>
							</fieldset>
						</form>
		            </div>
		            <!-- /wizard with validation -->

		            @endsection
		            @push('js')
<script src="{{asset('backend/global_assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/wizard_steps.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
@endpush

