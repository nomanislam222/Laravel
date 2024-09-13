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
 <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}">
 @endpush
@section('content')

    <!-- slider-area Start -->
    <div class="Banner-Design-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #fff;">{{$banner->name}} </h2>
                    <p style="color: white"><a href="{{URL::to('/')}}">Home </a><i class="fa fa-long-arrow-right"></i> &nbsp;<a href="{{URL::to('/details/graphics-design')}}">Graphics</a> <i class="fa fa-long-arrow-right"></i> {{$banner->name}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area End -->
    <!-- slider-area End -->

    <!--        protfulio section start -->

    <section class="popup py-5">
        <div class="container">
            <h3 class="text-center font-weight-bold mb-4"> {{$banner->name}}</h3>
            
            <div class="row ">
   @foreach($design as $des)
                <div class="col-md-4 my-2">
                    <a href="{{asset('storage/'.$des->pic)}}" class="gal_link"><img @if($des->title) title="{{$des->title}}" @endif src="{{asset('storage/'.$des->pic)}}" height="200px;" @if($des->alt) alt="{{$des->alt}}" @endif></a>

                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--        protfulio section end -->
@endsection
@push('js')
<script type="text/javascript">         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();         (function(){             var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];             s1.async=true;             s1.src='https://embed.tawk.to/5bf03af440105007f3787464/default';             s1.charset='UTF-8';             s1.setAttribute('crossorigin','*');             s0.parentNode.insertBefore(s1,s0);         })();     </script>
<script src="{{asset('frontend/js/jquery.lightbox.js')}}"></script>
    <script src="{{asset('frontend/js/lightbox.js')}}"></script>
@endpush
