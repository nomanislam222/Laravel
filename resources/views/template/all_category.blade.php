@extends('layout.admin')
@section('content')
<br>
<h1 style="text-align: center;">All Web Template Categories</h1>
						<!-- Column selectors -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">All Web Template Categories Table</h5>
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
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								 @foreach($cat as $value)
                            <tr>
                                <td>{{$value->category_id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->des}}</td>
                                <td>
                                  <a class="btn btn-info" href="{{URL::to('template/edit-category/'.$value->category_id)}}"><i class="icon-pencil6" style="font-size: 18px"></i></a>
                                
                                </td>
                            </tr>
                           @endforeach
							</tbody>
						</table>
					</div>
					</div>
					<!-- /column selectors -->
@endsection