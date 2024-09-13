@extends('layout.admin')
@section('content')
<br>
<h1 style="text-align: center;">All Softwares</h1>
						<!-- Column selectors -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">All  Softwares Table</h5>
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
									<th>Main Image</th>
									<th>Icon Image</th>
									<th>Feature Image</th>
									<th>Link</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								 @foreach($cat as $value)
                            <tr>
                            	
                                <td>{{$value->soft_id}}</td>
                                <td>SATT {{$value->name}}</td>
                                <td><img height="100px" width="150px" src="{{asset('storage/'.$value->main_pic_e)}}"></td>
                                <td><img height="100px" width="150px" src="{{asset('storage/'.$value->icon_pic)}}"></td>
                                <td><img height="100px" width="150px" src="{{asset('storage/'.$value->feature_pic)}}"></td>
                                <?php
                                $nam= DB::table('pro_category')->where('category_id', $value->category_id)->get();
                                ?>
                                 @foreach($nam as $name)
                                <td>{{$name->name}}</td>
                                @endforeach
                                
                                <td>
                                  <a class="btn btn-info" href="{{URL::to('software/edit-software/'.$value->soft_id)}}"><i class="icon-pencil6" style="font-size: 18px"></i></a>
                                   <a class="btn btn-primary" href="{{URL::to('software/view-software/'.$value->soft_id)}}"><i class="icon-eye" style="font-size: 18px"></i></a>
                                   <a id='confirm' class="btn btn-danger" href="{{URL::to('/delete-soft/'.$value->soft_id)}}"><i class="icon-trash" style="font-size: 18px"></i></a>

                                </td>
                            </tr>
                           @endforeach
							</tbody>
						</table>
					</div>
					</div>
					


@endsection
@push('js')
</script>
     <script type="text/javascript" src="{{asset('js/bootbox.min.js')}}"></script>
   <script>
    $(document).on("click", "#confirm", function(e) {
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Are You Want To Delete?",function(confirmed){
if(confirmed){
    window.location.href = link;
};
    });
    });
    
   
</script>
@endpush