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

<script src="{{asset('frontend/corasol/owl.carousel.js')}}"></script>

@endpush
@section('content')

 <!-- slider-area Start -->
    <div class="host-banner">
        <div class="container">
            <div class="row mx-0">
                <div class="col-md-12 text-center ">
                    <h2 style="color: #fff;">We Make Sure Your Website Is <br>
                     Super Fast, Secure & Always Up</h2>
                    
                    <a href="https://satthost.com/"> <button type="submit" class="btn btn text-center mt-4" target="_blank"> Our Host</button> </a> 
                </div>
                
            </div>
        </div>
    </div>
    <!-- slider-area End -->
    
    
    
    <!--  gradian section design start -->  
    <div class="service-two-area pb-5 Graphic-Design-area" >
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service py-4">
                        <div class="service-icon px-4">
                            <img src="{{asset('frontend/img/icon/accounting.svg')}}" alt="" style="width: 70px;">
                        </div>
                        <div class="service-title px-4">
                            <h5><a href="#">
                                Our Guarantee</a></h5>
                        </div>
                        <div class="service-content pb-4 px-4">
                            <p>We guarantee that the infrastructure delivering connectivity to our hosting servers is available at least 99.9% of the time, excluding scheduled maintenance. We have full redundancy at all levels within our network, and we're proud to say our network uptime is among the best around.
                            <br>
                            <br></p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service py-4">
                        <div class="service-icon px-4">
                            <img src="{{asset('frontend/img/icon/Community%20.svg')}}" alt="" style="width: 70px;">
                        </div>
                        <div class="service-title px-4">
                            <h5><a href="#">Committed to Privacy</a></h5>
                        </div>
                        <div class="service-content pb-4 px-4">
                            <p>Satthost is a longtime champion of online privacy. In fact, privacy has been one of our core values since inception. We live this value within our business and our work with others. We have a longstanding partnership with privacy-focused organizations such as the Electronic Frontier Foundation.</p>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service py-4">
                        <div class="service-icon px-4">
                            <img src="{{asset('frontend/img/icon/Workshop%20.svg')}}" alt="" style="width: 70px;">
                        </div>
                        <div class="service-title px-4">
                            <h5><a href="#">Website analytics
                                </a></h5>
                        </div>
                        <div class="service-content pb-4 px-4">
                            <p class="pb-4 mb-1">We use multiple web analytics tools provided by service partners such as Google Analytics, MixPanel, and Singular to collect information about how you interact with our website. We use the information provided by these tools to improve our Services.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  gradian section design start -->

    
@endsection