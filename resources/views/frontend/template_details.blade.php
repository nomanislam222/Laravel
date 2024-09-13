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
      <div class="contact-page-slider1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white">Web Design</h2>
                    <p><a href="{{asset('/')}}">Home &nbsp; </a><i class="fa fa-long-arrow-right"></i> &nbsp;Web Design</p>
                </div>
            </div>
        </div>
    </div>
        <!-- slider-area End -->
        <!-- slider-area End -->
        
      
        
<!--        protfulio section start -->   
   <section class="details_webdesign mb-5">
        <div class="container">
            <div class="text-center">
                <h4 class="mt-5 mb-2 font-weidth-bold"> Web Design </h4>
            </div>
@foreach($category as $cat)
<?php
$check =DB::table('template')->where('category_id', $cat->category_id)->first();
?>
@if($check)
 <p class="h4 mt-5"><a href="{{('/template/'.$cat->slug)}}">{{ $cat->name}}</a></p> 
 @endif
 <?php 
 $name = DB::table('template')->where('category_id', $cat->category_id)->take(6)->get();
 ?>
            
            <div class="row mb-4">
                @foreach($name as $nam)
                <div class="col-md-4 my-3">
                    <div class="card details_webdesign_card">
                        <a href="{{$nam->link}}" target="_blank"> <img src="{{asset('storage/app/public/'.$nam->pic)}}" alt="image" height="250px" width="100%"></a>
                        <a href="{{$nam->link}}" target="_blank" class="btn text-center mt-5 py-1 my-2">Live Preview </a>
                    </div>

                </div>
                @endforeach
         
            </div>
            @if($check)
            <p class="h4 text-center mb-5"><a class="btn btn-info px-5 text-center" href="{{('/template/'.$cat->slug)}}">See More</a></p>
            @endif
@endforeach           

 
                   
       </div>
    </section>
<!--        protfulio section end -->
@endsection
@push('js')
 <script type="text/javascript">         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();         (function(){             var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];             s1.async=true;             s1.src='https://embed.tawk.to/5bf03af440105007f3787464/default';             s1.charset='UTF-8';             s1.setAttribute('crossorigin','*');             s0.parentNode.insertBefore(s1,s0);         })();     </script>
 <script src="{{asset('frontend/js/jquery.lightbox.js')}}"></script>
    <script src="{{asset('frontend/js/lightbox.js')}}"></script>
 @endpush
