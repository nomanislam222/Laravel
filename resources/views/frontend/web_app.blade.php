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
 <link rel="stylesheet" href="{{asset('frontend/corasol/docs.theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/corasol/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/corasol/owl.theme.default.min.css')}}">
@endpush        
@section('content')
 <!-- slider-area Start -->
    <div class="contact-page-slider1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #fff;"> Web App </h2>
                    <p><a href="{{asset('/')}}">Home </a><i class="fa fa-long-arrow-right"></i> <a href="{{asset('/service')}}">Services</a> <i class="fa fa-long-arrow-right"></i> &nbsp; Web-App</p>
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
                    <h4 class="font-weight-bold"> Dynamic Website </h4>
                    <p> A dynamic website, as opposed to a static website, is built using a server side scripting       language, such as PHP or JSP.
                        A dynamic web page is a web page that displays different content each time it's viewed. For example, the page may change with the time of day, the user that accesses the webpage, or the type of user interaction. There are two types of dynamic web pages.
                    </p>
                    <a href="{{asset('/details/web-app')}}">
                        <button type="button" class="btn btn-info">Our Produtcs </button></a>
                </div> 
                <div class="col-md-6">
                    <img src="{{asset('frontend/img/Dynamic.png')}}" alt="" width="100%">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{asset('frontend/img/Development%20with%20CMS.png')}}" alt="" width="100%">
                </div>
                <div class="col-md-6 pl-4">
                    <h4 class="font-weight-bold"> Development with CMS </h4>
                    <p> We lead the new face of website development industry by harnessing the power of WordPress development services to develop exceptional portals that add phenomenal value to your brand.
                        Expertise in working with the most robust CMS platform digital world has seen, we offer innovative and brilliant solutions to the enterprises. Quick to market and best CMS handling features have made WordPress solutions our first choice. We love the way WordPress empowers the enterprise and offers an exceptional experience to the end users.

                    </p>
                    <a href="{{asset('/details/web-app')}}">
                        <button type="button" class="btn btn-info">Our Produtcs </button></a>

                </div> 

            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-6 pl-4">
                    <h4 class="font-weight-bold"> Custom Web Application </h4>
                    <p> The word “custom” here as, fitting to people’s desires. When someone build a web application suitable for a specific requirement of a specific client/organization, it is termed as custom web application.
                        When a general purpose web application is configured for a specific requirement it is called customized application.
                    </p>
                    <a href="{{asset('/details/web-app')}}">
                        <button type="button" class="btn btn-info">Our Produtcs </button></a>

                </div> 

                <div class="col-md-6">
                    <img src="{{asset('frontend/img/Custom%20Web.png')}}" alt="" width="100%">
                </div>

            </div>
        </div>
    </section>
@endsection
@push('js')
<script src="{{asset('frontend/corasol/owl.carousel.js')}}"></script>

@endpush