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
<!--Main Menu File-->
<link rel="stylesheet" href="{{asset('frontend/corasol/docs.theme.min.css')}}">

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{asset('frontend/corasol/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/corasol/owl.theme.default.min.css')}}">
<script src="{{asset('frontend/corasol/owl.carousel.js')}}"></script>

@endpush
@section('content')
  <!-- slider-area Start -->
    <div class="contact-page-slider1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #fff;"> Digital Marketing </h2>
                    <p><a href="{{asset('/')}}">Home </a><i class="fa fa-long-arrow-right"></i><a href="{{asset('/service')}}">Services</a> <i class="fa fa-long-arrow-right"></i> &nbsp;  Digital Marketing </p>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area End -->
    <!-- slider-area End -->
    
    <!--      web app area start here  -->
    <section>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 pr-4 ">
                    <h4 class="font-weight-bold"> S E O</h4>
                    <p> SEO is most important for making your website easy to understand. although it have become increasingly sophisticated, it helps the engines to figure page information and how it may be useful for users.
                    </p>
                    <a href="{{asset('/details/web-app')}}">
                        <button type="button" class="btn btn-info">Our Produtcs </button></a>
                </div> 
                <div class="col-md-6">
                    <img src="{{asset('frontend/img/SEO.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                   <div style="border-left: solid 4px black;"> 
                    <img src="{{asset('frontend/img/SEM.jpg')}}" alt="" width="100%">
                    </div>
                </div>
                <div class="col-md-6 pl-4">
                    <h4 class="font-weight-bold"> S E M </h4>
                    <p> SEM is needy to  increase relevant traffic to your website, through higher rankings on search engines.At present, the best way to rank the website fast

                    </p>
                    <a href="{{asset('/details/web-app')}}">
                        <button type="button" class="btn btn-info">Our Produtcs </button></a>

                </div> 

            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-6 pl-4">
                    <h4 class="font-weight-bold"> Website Strategy </h4>
                    <p> A web strategy is a long-term strategic business plan, indicating how to create and develop a company's online presence
                    </p>
                    <a href="{{asset('/details/web-app')}}">
                        <button type="button" class="btn btn-info">Our Produtcs </button></a>

                </div> 

                <div class="col-md-6">
                    <img src="{{asset('frontend/img/website-strategy.jpg')}}" alt="">
                </div>

            </div>
        </div>
    </section>

    <!--      web app area end here  -->

@endsection