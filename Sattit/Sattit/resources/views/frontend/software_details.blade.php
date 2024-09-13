@extends('layout.frontend')
@section('head')

@if($seo)

<meta charset="utf-8">
<meta name="description" content="{{$seo->des}}"/>
<meta name="keywords" content="{{$seo->keyword}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Primary Meta Tags -->
<meta name="title" content="{{$seo->title}}">
<meta name="description" content="{{$seo->des}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://sattit.com/{{$seo->link}}">
<meta property="og:title" content="{{$seo->title}}">
<meta property="og:description" content="{{$seo->des}}">
<meta property="og:image" content="https://sattit.com/img/Logo2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://sattit.com/{{$seo->link}}">
<meta property="twitter:title" content="{{$seo->title}}">
<meta property="twitter:description" content="{{$seo->des}}">
<meta property="twitter:image" content="https://sattit.com/img/Logo2.png">

<title>{{$seo->title}}</title>

@else
@endif


@endsection
@push('css')
@endpush        
@section('content')
<section class="product_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-dm-12">
					<h2 class="text-white font-weight-bold"> Our Product </h2>
					<p class="text-white"><a class="text-white" href="index.html"> Home </a> <i class="fa fa-long-arrow-right ml-1"> </i> &nbsp; Our Product </p>
				</div>
			</div>
		</div>
	</section>

		<section class="produtcs-details py-4">
		<div class="container">
			<h3 class="text-center pb-4 h1" style="color: teal; font-weight: 1000">Our Software and Website</h3>

		</div>



		<section class="produtcs-details py-4">
			<div class="container">
						@foreach($category as $cat)
<?php
$check =DB::table('soft_details')->where('category_id', $cat->category_id)->first();
?>
@if($check)
<h3 class="text-center pb-3" style="color: teal; font-weight: 600">{{ $cat->name}}</h3>
 @endif
 <?php 
 $name = DB::table('soft_details')->where('category_id', $cat->category_id)->get();
 ?>
				<div class="row">
 @foreach($name as $nam)
					<div class=" col-sm-6 col-sm-6  col-md-4 col-lg-3">
						<a href="{{URL::to('view-software/'.$nam->soft_id)}}" target="_blank">
							<div class="item">
				
								<div class="product-img ">
									<img class="d-inline-block " src="{{asset('storage/'.$nam->icon_pic)}}" alt="First slide">
								</div>
								<p class="text-light"> <strong>{{$nam->name}}</strong> <br> Management Software</p>
							</div>
						</a>
					</div>
					@endforeach
				</div>
				<br><br>
					@endforeach
			</div>
		</section>
	</section>

			


@endsection
