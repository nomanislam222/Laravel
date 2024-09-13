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
<meta property="og:url" content="https://sattit.com{{$seo->link}}">
<meta property="og:title" content="{{$seo->title}}">
<meta property="og:description" content="{{$seo->des}}">
<meta property="og:image" content="https://sattit.com/img/Logo2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://sattit.com{{$seo->link}}">
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


<section class="banner">
<div class="canvas-content">
<!--      bannerr area end -->
<!--    canvas area start -->
<!-- particles.js container -->
<div id="particles-js"></div>

<!-- scripts -->
<script src="{{asset('frontend/js/particles.js')}}"></script>
<script src="{{asset('frontend/js/app.js')}}"></script>

<!-- stats.js -->
<script src="{{asset('frontend/js/lib/stats.js')}}"></script>
<script>
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
stats.begin();
stats.end();
if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
}
requestAnimationFrame(update);
};
requestAnimationFrame(update);
</script>
<!--    canvas area end -->
</div>
<div class="container-fluid banner-text">
<div class="row">
<div class="col-md-12  text-center" style="line-height:1.2;">
<p id="satt" class="text-uppercase">
Welcome To The World of <br>  <br>
<span id="satt1" class="h1 font-weight-bold" > SATT</span>
</p>
</div>
</div>
</div>
</section>


<!--  banner ads  -->



<section class="banner-ads-section">
<div class="owl-carousel owl-theme" id="owl-banner-ads">
<div class="item">
<div class="banner-ads">
<div class="row">
<div class="col-md-2 col-sm-1"></div>
<div class="col-md-6 col-sm-7">
<h2 class="our_achievement_h2"> Our Achievement</h2>
<ul class="our_achievement_ul">
<li> <a href="https://sattacademy.com/"> Satt Academy </a></li>
<li> <a href="https://sattacademy.com/"> Job Assisant </a></li>
<li>  <a href="https://sattacademy.com/"> Admission Assistant </a></li>
</ul>
</div>
<div class="col-md-4 col-sm-4  m-auto my-2">
<a href="https://sattacademy.com/" target="_blank"> <button class="btn btn for-more-btn"> For more </button></a>
</div>

</div>
</div>
</div>




</div>
<script>
$('#owl-banner-ads').owlCarousel({
loop: true,
margin: 10,
nav: false,
dots: false,
navText: [
"<i class='fa fa-angle-left' aria-hidden='true'></i>",
"<i class='fa fa-angle-right' aria-hidden='true'></i>"
],
autoplay: true,
autoplayTimeout: 5000,
autoplaySpeed: 1000,
autoplayHoverPause: true,
responsive: {
0: {
items: 1
},
600: {
items: 1
},
1000: {
items: 1
}
}
});
</script>
</section>



<!--  banner ads end  -->


<!--   light box start -->
<section class="pt-0 pb-5 home-page">

<div class="container pt-3">
<div class="cards-content text-center">
<h3 class="text-center font-weight-bold mb-0 things" style="color: teal"> We Do Things Differently</h3>
<p class="text-center"> We are dedicated to providing you with the best experience possible.</p>
<div class="row">
<div class="col-md-4 my-3">
<div class="card">
<div class="content-overlay"></div>
<p class="content-text mx-1">We make  mobile first responsive,  glorious, user friendly and dazzling Web Templates. <br>

<a href="{{asset('/details/web-design')}}"> <button class="btn live-privew-btn "> Live Privew</button> </a>
</p>
<img class="card-img-top" src="{{asset('frontend/img/We%20Design.png')}}" alt="Card image cap">

<div class="card-body">
<h4 class="card-title my-0"> <a href="Detailswebdesign.html" target="_blank"> Web Templates </a></h4>
</div>
</div>
</div>
<div class="col-md-4 my-3">
<div class="card">
<div class="content-overlay"></div>
<p class="content-text mx-1">We make  mobile first responsive,  glorious, user friendly and dazzling Web Templates. <br>
<a href="{{asset('/details/web-app')}}"> <button class="btn live-privew-btn "> Live Privew</button> </a>
</p>
<img class="card-img-top" src="{{asset('frontend/img/Web%20app%20development%20.png')}}" alt="Card image cap">

<div class="card-body">
<h4 class="card-title my-0"> <a href="{{asset('/details/web-app')}}" target="_blank"> Web Applications</a></h4>
</div>
</div>
</div>
<div class="col-md-4 my-3">
<div class="card">
<div class="content-overlay"></div>
<p class="content-text mx-2">We have professional graphic designers here. We will provide any type of design with unlimited revision also. <br>
<a href="{{asset('/details/graphics-design')}}"> <button class="btn live-privew-btn "> Live Privew</button> </a>
</p>
<img class="card-img-top" src="{{asset('frontend/img/Graphic%20Design.png')}}" alt="Card image cap" width=" ">

<div class="card-body">
<h4 class="card-title my-0"> <a href="details-Graphics.html" target="_blank"> Graphics Design </a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- fast card -->

<!--    why we are the best are start -->
<section class="why-we-best pb-5">

<div class="container shadow-lg ">
<div class="row text-center">
<div class="col-md-6 mx-auto">
<h3 class="mb-1" style="font-weight: bold; color: teal;"> Why We Are The Best ! </h3>
<p> Truly ideal solutions for your business. Create a website or system that you are gonna be proud of. </p>
</div>
</div>
<div class="row no-gatters ">
<div class="col-md-6 px-0">
<div class="box" style="border-bottom: 1px solid #989898; border-right: 1px solid #989898;  " >
<div class="card-body">
<div class="media m-5">
<img src="{{asset('frontend/img/New/2.svg')}}" class="mr-3" alt="...">
<div class="media-body">
<h5 class="mt-0 mb-1">Perfect design</h5>
<p>Out of box thinking and Award-winning web IT agency. </p>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 px-0">
<div class="box " style="border-bottom: 1px solid #989898;  ">
<div class="card-body">
<div class="media m-5">
<img src="{{asset('frontend/img/New/3.svg')}}" class="mr-3" alt="...">
<div class="media-body">
<h5 class="mt-0 mb-1">  Fast Customer support</h5>
<p>  Our Support Team will do its best to provide the best helpful answer for the issues.</p>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 px-0">
<div class="box " style="border-right:1px solid #989898;  ">
<div class="card-body">
<div class="media m-5">
<img src="{{asset('frontend/img/New/4.svg')}}" class="mr-3" alt="...">
<div class="media-body">
<h5 class="mt-0 mb-1"> Easy to Customize</h5>
<p>  Without any programming knowledge anyone can customize website or system.</p>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 px-0">
<div class="box border-style">
<div class="card-body">
<div class="media m-5">
<img src="{{asset('frontend/img/New/1.svg')}}" class="mr-3" alt="...">
<div class="media-body">
<h5 class="mt-0 mb-1"> Powerful Performance</h5>
<p>  High performance, super fast with top page speed & yslow ratings.</p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--    why we are the best are start -->




<!--   light box end  -->


<section class="prodect-slider products-item py-5">

<section id="demos">
<div class="container">
<h3 class="text-center mb-0 font-weight-bold" style="color: teal"> Latest Works </h3>
<p class="text-center" style="color: ;"> Work on the best projects for the best clients. <br> Our clients are some of the most forward-looking companies in the world. </p>
<hr>
<div class="row">
<div class="large-12 columns">
<div class="owl-carousel owl-theme">
	@foreach($software as $soft)
<a href="{{$soft->link}}" target="_blank">
<div class="item ">
<div class="product-icon ">
<img class="d-inline-block " src="{{asset('storage/app/public/'.$soft->icon_pic)}}" alt="First slide">
</div>
<p class="text-light"> <strong>{{$soft->name}}</strong> <br> Management Software</p>
</div>
</a>
@endforeach
</div>

<script>
$(document).ready(function() {
$('.owl-carousel').owlCarousel({
loop: true,
margin: 10,
responsiveClass: true,
responsive: {
0: {
items: 1,
nav: true
},                                
480: {
items: 2,
nav: false
},

600: {
items: 2,
nav: false
},
1000: {
items: 4,
nav: true,
loop: true,
margin: 20
}
}
})
})
</script>
</div>
</div>


</div>
</section>
</section>


<!--   counter area start -->
<section class="counter-area pt-5">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="m-0 " style="font-weight: bold; color: teal;"> Why choose us </h2>
<p> The lightweight website or system, which enables anyone to <br> customize that customer-oriented perform to the notch</p>
</div>

</div>
</div>
<section class="" style=" background-color: teal; box-shadow: 0 1rem 3rem rgba(0, 128, 128, 0.25) !important;">
<div class="container"> 

<div class="col-md-12 py-5" style="color: #fff; ">
<div class="row text-center">
<div class="col-6 col-md-3">
<div class="counter">
<i class="fa fa-code fa-2x"></i>
<h2 class="timer count-title count-number font-weight-bold" data-to="4905" data-speed="1500"></h2>
<p class="count-text ">ORDERED COFFEE'S</p>
</div>
</div>
<div class="col-6 col-md-3">
<div class="counter">
<i class="fa fa-coffee fa-2x"></i>
<h2 class="timer count-title count-number font-weight-bold" data-to="3750" data-speed="1500"></h2>
<p class="count-text ">QUESTIONS ANSWERED</p>
</div>
</div>
<div class="col-6 col-md-3">
<div class="counter">
<i class="fa fa-lightbulb-o fa-2x"></i>
<h2 class="timer count-title count-number font-weight-bold" data-to="478" data-speed="1500"></h2>
<p class="count-text ">COMPLETED PROJECTS</p>
</div>
</div>
<div class="col-6 col-md-3">
<div class="counter">
<i class="fa fa-bug fa-2x"></i>
<h2 class="timer count-title count-number font-weight-bold" data-to="3237" data-speed="1500"></h2>
<p class="count-text ">HAPPY CLIENTS</p>
</div>
</div>
</div>
</div>
</div>
</section>


</section>




@endsection
@push('js')
<!--   counter area start -->
<script src="{{asset('frontend/corasol/highlight.js')}}"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('frontend/js/counter.js')}}"></script>
@endpush