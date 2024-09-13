@extends('layout.admin')
@section('content')
<br><br><br>
	<button type="button" style="margin-left: 5%" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_vertical"> <i class="icon-add"></i> Add Language </button>
		<!-- Basic layout-->
		<br>

		<h1 style="text-align: center;">All Languages</h1>
						<!-- Column selectors -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">All Languages Table</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

                          <div class="">
						<table class="table datatable-button-html5-columns">

							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								 @foreach($cat as $value)
                            <tr>
                                <td>{{$value->lan_id}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                  <a class="btn btn-info" href="{{URL::to('software/edit-language/'.$value->lan_id)}}"><i class="icon-pencil6" style="font-size: 18px"></i></a>

                                </td>
                            </tr>
                           @endforeach
							</tbody>
						</table>
					</div>
					</div>



				          <!-- Vertical form modal -->
					<div id="modal_form_vertical" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 style="text-align: center;" class="modal-title">Language form</h5>
								</div>

								<form action="{{url('/software/add-language')}}" method="POST">
									@csrf
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-2"></div>
												<div class="col-sm-8">
													<label>Language Name</label>
													<input type="text" name="name" placeholder="Enter Language Name" class="form-control">
												</div>
												<div class="col-sm-2"></div>
											</div>
										</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Submit form</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->

@endsection