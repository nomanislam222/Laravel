@extends('layout.admin')
@section('content')
<br>
<h1 style="text-align: center;">All Graphics Design</h1>
						<!-- Column selectors -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">All Graphics Design Table</h5>
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
									<th>Category</th>
									<th>Image</th>
									<th>Title</th>
									<th>Alt</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								 @foreach($cat as $value)
                            <tr>
                                <td>{{$value->image_id}}</td>
                                <td>{{$value->name}}</td>
                                <td><img src="{{asset('storage/'.$value->pic)}}" style="height: 70px;width: 80px;border-radius: 10px" alt="img22"/></td>
                                 <td>@if($value->title){{$value->title}} @endif</td>
                                  <td>@if($value->alt){{$value->alt}} @endif</td>
                                <td>
                                  <a class="btn btn-info" href="{{URL::to('graphics/edit-design/'.$value->image_id)}}"><i class="icon-pencil6" style="font-size: 18px"></i></a>
                                  <a id='confirm' class="btn btn-danger" href="{{URL::to('/delete-design/'.$value->image_id)}}"><i class="icon-trash" style="font-size: 18px"></i></a>

                                </td>
                            </tr>
                           @endforeach
							</tbody>
						</table>
					</div>
					</div>
					<!-- /column selectors -->
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