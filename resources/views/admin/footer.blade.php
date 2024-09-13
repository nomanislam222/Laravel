@extends('layout.admin')
@section('content')



  <!-- Wizard with validation -->
  <br>
  @if(empty($footer->one_linkn))
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

	                	<form class="steps-validation" id="form" action="{{url('/admin/add-footer')}}" method="POST">
	                		{{ csrf_field() }}
							<h6>Useful Link</h6>
							<fieldset>
								<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>1st Link Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control"  placeholder="Enter 1st Link Name" aria-describedby="sizing-addon2" name="one_linkn" required="">
										</div>
									</div>
									<div class="col-md-6">
										<label>1st Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 1st Link Address" aria-describedby="sizing-addon2" name="one_linka" required="">
</div>
										</div>

								
								</div>
	<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>2nd Link Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter 2nd Link Name" aria-describedby="sizing-addon2" name="two_linkn" required="">
										</div>
									</div>
									<div class="col-md-6">
										<label>2nd Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 2nd Link Address" aria-describedby="sizing-addon2" name="two_linka" required="">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>3rd Link Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter 3rd Link Name" aria-describedby="sizing-addon2" name="three_linkn" required="">
										</div>
									</div>
									<div class="col-md-6">
										<label>3rd Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 3rd Link Address" aria-describedby="sizing-addon2" name="three_linka" required="">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>4th Link Name: </label>
											<input type="text" class="form-control" placeholder="Enter 4th Link Name" aria-describedby="sizing-addon2" name="four_linkn">
										</div>
									</div>
									<div class="col-md-6">
										<label>4th Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 4th Link Address" aria-describedby="sizing-addon2" name="four_linka">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>5th Link Name: </label>
											<input type="text" class="form-control" placeholder="Enter 5th Link Name" aria-describedby="sizing-addon2" name="five_linkn">
										</div>
									</div>
									<div class="col-md-6">
										<label>5th Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 5th Link Address" aria-describedby="sizing-addon2" name="five_linka">
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
											<input type="text" class="form-control" placeholder="Enter 1st Service Name" aria-describedby="sizing-addon2" name="one_servicen" required="">
										</div>
									</div>
									<div class="col-md-6">
										<label>1st Service Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 1st Service Link Address" aria-describedby="sizing-addon2" name="one_servicea" required="">
</div>
										</div>

								
								</div>
	<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>2nd Service Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter 2nd Service Name" aria-describedby="sizing-addon2" name="two_servicen" required="">
										</div>
									</div>
									<div class="col-md-6">
										<label>2nd Service Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 2nd Service Link Address" aria-describedby="sizing-addon2" name="two_servicea" required="">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>3rd Service Name: <span class="text-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter 3rd Service Name" aria-describedby="sizing-addon2" name="three_servicen" required="">
										</div>
									</div>
									<div class="col-md-6">
										<label>3rd Service Link Address: <span class="text-danger">*</span></label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 3rd Service Link Address" aria-describedby="sizing-addon2" name="three_servicea" required="">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>4th Service Name: </label>
											<input type="text" class="form-control" placeholder="Enter 4th Service Name" aria-describedby="sizing-addon2" name="four_servicen">
										</div>
									</div>
									<div class="col-md-6">
										<label>4th Service Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 4th Service Link Address" aria-describedby="sizing-addon2" name="four_servicea">
</div>
										</div>

								
								</div>
									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>5th Service Name: </label>
											<input type="text" class="form-control" placeholder="Enter 5th Service Name" aria-describedby="sizing-addon2" name="five_servicen">
										</div>
									</div>
									<div class="col-md-6">
										<label>5th Service Link Address: </label>
											<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2"><li class="icon-link"></li></span>
  <input type="text" class="form-control" placeholder="Enter 5th Service Link Address" aria-describedby="sizing-addon2" name="five_servicea">
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
		                                    <textarea rows="5" cols="5" placeholder="Enter a Proper Location" class="form-control" name="location" required=""></textarea>
	                                    </div>
									</div>
								</div>
							</fieldset>
						</form>
		            </div>
		            <!-- /wizard with validation -->





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
                             <h1 style="text-align: center;">Footer Section</h1>
								</div>

								<div class="panel panel-body no-border-top no-border-radius-top">
									<h1>Useful Links:</h1>
									<div class="form-group mt-5">
										<label class="text-semibold">{{$footer->one_linkn}}</label>
										<span class="pull-right-sm"><a href="{{$footer->one_linka}}">{{$footer->one_linka}}</a></span>
									</div>

									<div class="form-group">
										<label class="text-semibold">{{$footer->two_linkn}}</label>
										<span class="pull-right-sm"><a href="{{$footer->two_linka}}">{{$footer->two_linka}}</a></span>
									</div>

									<div class="form-group">
										<label class="text-semibold">{{$footer->three_linkn}}</label>
										<span class="pull-right-sm"><a href="{{$footer->three_linka}}">{{$footer->three_linka}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">{{$footer->four_linkn}}</label>
										<span class="pull-right-sm"><a href="{{$footer->four_linka}}">{{$footer->four_linka}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">{{$footer->five_linkn}}</label>
										<span class="pull-right-sm"><a href="{{$footer->five_linka}}">{{$footer->five_linka}}</a></span>
									</div>
									<h1>Popular Services:</h1>
									<div class="form-group">
										<label class="text-semibold">{{$footer->one_servicen}}</label>
										<span class="pull-right-sm"><a href="{{$footer->one_servicea}}">{{$footer->one_servicea}}</a></span>
									</div>

									<div class="form-group">
										<label class="text-semibold">{{$footer->two_servicen}}</label>
										<span class="pull-right-sm"><a href="{{$footer->two_servicea}}">{{$footer->two_servicea}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">{{$footer->three_servicen}}</label>
										<span class="pull-right-sm"><a href="{{$footer->three_servicea}}">{{$footer->three_servicea}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">{{$footer->four_servicen}}</label>
										<span class="pull-right-sm"><a href="{{$footer->four_servicea}}">{{$footer->four_servicea}}</a></span>
									</div>
									<div class="form-group">
										<label class="text-semibold">{{$footer->five_servicen}}</label>
										<span class="pull-right-sm"><a href="{{$footer->five_servicea}}">{{$footer->five_servicea}}</a></span>
									</div>
									<h1>Contact Us:</h1>
									<div class="form-group">
										<label class="text-semibold">Location</label>
										<span class="pull-right-sm"><a href="{{$footer->location}}">{{$footer->location}}</a></span>
									</div>
									<div class="text-center">
											<button class="btn btn-primary"><a style="color: white" href="{{URL::to('/admin/edit-footer')}}">Edit form </a><i class="icon-pencil6 position-center"></i></button>
										</div>


								</div>
							</div>

</div>
		<div class="col-md-3"></div>
		            @endif
@endsection
@push('js')
<script src="{{asset('backend/global_assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/wizard_steps.js')}}"></script>
@endpush