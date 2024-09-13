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
@section('content')
        <!-- slider-area Start -->
    <div class="contact-page-slider1">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #fff;">{{$template->name}} </h2>
                    <p style="color: white"><a href="{{URL::to('/')}}">Home </a><i class="fa fa-long-arrow-right"></i> &nbsp;<a href="{{URL::to('/details/web-design')}}">Graphics</a> <i class="fa fa-long-arrow-right"></i> {{$template->name}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area End -->
    <!-- slider-area End -->



    <!--    graphic area start -->
    <section class="webtemplete_design_img_card">
        <div class="container">
           <p class="h3 mt-5 mb-3 text-center color_change"> {{$template->name}}</p>
            
             <div class="row mt-5 mb-5">
                 @foreach($design as $tem)
               
                   
                <div class="col-md-4 my-3">
                    <div class="card details_webdesign_card">
                        <a href="{{$tem->link}}" target="_blank"> <img title="{{$template->name}}" src="{{asset('storage/'.$tem->pic)}}" alt="{{$template->name}}" width="100%"></a>
                        <a href="{{$tem->link}}" target="_blank" class="btn text-center mt-5 py-1 my-2">Live Preview </a>
                    </div>

                </div>

                @endforeach
                
                
            </div>
        </div>
    </section>

@endsection

