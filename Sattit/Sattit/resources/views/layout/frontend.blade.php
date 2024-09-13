<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
@yield('head')
<!--<meta property="og:image"       content="" />-->
<link rel="icon" href="{{asset('frontend/img/fevicon.png')}}">
<!--    font Montserrat -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" 
rel="stylesheet">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
 crossorigin="anonymous">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
<!-- Vendor -->
<script type="text/javascript" src="{{asset('frontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<!--Main Menu File-->
<link id="effect" rel="stylesheet" type="text/css" media="all" 
href="{{asset('frontend/webslidemenu/dropdown-effects/fade-down.css')}}" />

<link rel="stylesheet" type="text/css" media="all"
 href="{{asset('frontend/webslidemenu/webslidemenu.css')}}" />

<link id="theme" rel="stylesheet" type="text/css" media="all" 
href="{{asset('frontend/webslidemenu/color-skins/white-red.css')}}" />

<!-- Include Below JS After Your jQuery.min File -->
<script type="text/javascript" src="{{asset('frontend/webslidemenu/webslidemenu.js')}}"></script>

<!--For Demo Only (Remove below css and Javascript) -->
<link rel="stylesheet" href="{{asset('frontend/webslidemenu/demo.css')}}" />

<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


<!-- Main CSS -->

<script type='text/javascript'>
$(document).ready(function() {
$("a[data-theme]").click(function() {
$("head link#theme").attr("href", $(this).data("theme"));
$(this).toggleClass('active').siblings().removeClass('active');
});
$("a[data-effect]").click(function() {
$("head link#effect").attr("href", $(this).data("effect"));
$(this).toggleClass('active').siblings().removeClass('active');
});
});

</script>
<!--For Demo Only (Remove below css and Javascript) -->
@stack('css')
</head>

<body>
	<?php
 $profile =DB::table('profile')->first();
 ?>
<!-- Mobile Header -->
<div class="wsmobileheader clearfix ">
<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
<a href="index.html"> <span class="smllogo"><img src="img/logo2.svg"

 width="80" alt="" /></span></a>
<a href="tel:01850045500" class="callusbtn"><i class="fa fa-phone"

 aria-hidden="true"></i></a>
</div>
<!-- Mobile Header -->

<div class="headtoppart ">
<div class="headerwp">
<div class="headertopleft">
<div class="address" style="color: white"><span><i class="fa fa-envelope" aria-hidden="true">
</i> {{$profile->email}} </span> 
	<i class="fa fa-phone" aria-hidden="true"></i>
	{{$profile->phone}}</div>
</div>
<div class="headertopright">

<a class="googleicon" title="Google" 
href="{{$profile->google}}"><i 
	aria-hidden="true" class="fa fa-google"></i> 
	<span class="mobiletext02">Google</span></a>
<a class="linkedinicon" title="Linkedin" 
href="{{$profile->linkedin}}"><i 
	aria-hidden="true" class="fa fa-linkedin"></i> 

	<span class="mobiletext02">Linkedin</span></a>
<a class="twittericon" title="Twitter" href="{{$profile->twitter}}">
	<i aria-hidden="true" class="fa fa-twitter"></i>

	 <span class="mobiletext02">Twitter</span></a>
<a class="facebookicon" title="Facebook" href="{{$profile->fb}}">
	<i aria-hidden="true" class="fa fa-facebook"></i> 

	<span class="mobiletext02">Facebook</span></a>
</div>
</div>
</div>

<div class="wsmainfull ">
<div class="wsmainwp  mx-5">
<div class="desktoplogo"><a href="{{URL::to('/')}}"><img src="{{asset('frontend/img/Logo2.png')}}" alt="">

</a></div>
<!--Main Menu HTML Code-->
<nav class="wsmenu ">
<ul class="wsmenu-list">


<li class=" " aria-haspopup="true"><a href="{{URL::to('/')}}">Home</a>

</li>
<li class="" aria-haspopup="true"><a href="{{URL::to('/service')}}">Services</a>

</li>
<li  aria-haspopup="true"><a href="{{URL::to('/hosting')}}">Hosting</a>

</li>
<li class=" " aria-haspopup="true"><a href="{{URL::to('/details/web-app')}}">
	Product<span class="wsarrow"></span></a>
<div class="wsmegamenu ">
<div class="typography-text ">
<div class="container">
<div class="row">

<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
<h3 class="title">Web Application</h3>
<ul>
	<?php
  $soft = DB::table('soft_details')->take(3)->get();
	?>
	@foreach($soft as $software)
<li><a href="{{URL::to('/view-software/'.$software->soft_id)}}"><img height="60px" width="60px" src="{{('storage/'.$software->icon_pic)}}">
  Satt {{$software->name}} Management</a></li>

@endforeach
<li class=" "><a href="{{URL::to('/details/web-app')}}"> 
	<span style="color: #ffb100"> More Software</span> </a></li>
</ul>
</div>

<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
<h3 class="title">Web Template</h3>
<ul>
<li><a href="https://sattit.com/web-apps/restaurant-v2"><i class="fas fa-utensils">
</i> &nbsp; Restaurant</a></li>
<li><a href="https://sattit.com/web-design/ECommerce-1/">
	<i class="fas fa-shopping-bag"></i> &nbsp; E-Commarce</a></li>
<li><a href="https://sattit.com/web-design/Agency/">
	<i class="fab fa-windows"></i> &nbsp; Agency</a></li>
<li class=" "><a href="{{URL::to('/details/web-design')}}"> 

	<span style="color: #ffb100"> More Web Templates</span> </a></li>
</ul>
</div>
<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
<h3 class="title">Graphics Design</h3>
<ul>
<li><a href="{{URL::to('/design/logo-design')}}"><i class="fab fa-asymmetrik"></i> 
&nbsp;Logo Design</a></li>
<li><a href="{{URL::to('/design/business-card-design')}}"><i class="fas fa-credit-card"></i> 
&nbsp;Business Card Design</a></li>
<li><a href="{{URL::to('/design/banner-design')}}"><i class="fas fa-braille"></i
	> 
&nbsp;Banner Design</a></li>
<li class=" "><a href="{{URL::to('/details/graphics-design')}}"> <span style="color: #ffb100">
 More Graphics Design</span> </a></li>
</ul>
</div>

<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
<h3 class="title">More Services</h3>
<ul>
<li><a href="https://www.sattacademy.com/"><img src="{{asset('frontend/img/Fevicon%20white.png')}}">

 &nbsp;Satt Academy</a></li>
<li><a href="https://sattacademy.com/forum/"><img src="{{asset('frontend/img/Fevicon%20white.png')}}">

 &nbsp;Satt Forum</a></li>
 
</ul>
</div>
</div>

</div>

</div>
</div>
</li>


<li class=" " aria-haspopup="true"><a href="{{URL::to('/contact')}}"> Contact Us </a>

</li>
<li class=" " aria-haspopup="true">

</li>
<li class=" " aria-haspopup="true"><a href="http://sattit.com/career" 
	target="_blank">


 Career </a>

</li>

<li aria-haspopup="true" class="rightmenu">
<form class="topmenusearch">
<input placeholder="Search...">
<button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true">
	
</i></button>
</form>
</li>


</ul>
</nav>
<!--Menu HTML Code-->
</div>
</div>

<!--   navbar magamenu end -->

<!--      bannerr area start -->
@yield('content')





	<?php
 $footer =DB::table('footer')->first();
 ?>

<!-- footer -->
<!-- footter area start -->
<div class="footer-area-top pt-4">
<div class=" px-5">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="footer-box">
<h3>USEFUL LINKS</h3>
<ul class="featured-links p-0">
<li>
<ul class="p-0">
<li><a href="{{$footer->one_linka}}" target="_blank">{{$footer->one_linkn}}</a></li>
<li><a href="{{$footer->two_linka}}" target="_blank">{{$footer->two_linkn}}</a></li>
<li><a href="{{$footer->three_linka}}" target="_blank">{{$footer->three_linkn}}</a></li>
<li><a href="{{$footer->four_linka}}">{{$footer->four_linkn}}</a></li>
<li><a href="{{$footer->five_linka}}">{{$footer->five_linkn}}</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="footer-box">
<h3>POPULAR SERVICES</h3>
<ul class="featured-links p-0">
<li>
<ul class="p-0">
<li><a href="{{$footer->one_servicea}}">{{$footer->one_servicen}}</a></li>
<li><a href="{{$footer->two_servicea}}">{{$footer->two_servicen}}</a></li>
<li><a href="{{$footer->three_servicea}}">{{$footer->three_servicen}}</a></li>
<li><a href="{{$footer->four_servicea}}">{{$footer->four_servicen}}</a></li>
<li><a href="{{$footer->five_servicea}}">{{$footer->five_servicen}}</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="footer-box">
<h3>CONTACT US</h3>
<ul class="contact-us p-0">
<li>
<ul class="p-0">
<li class="location">{{$footer->location}}</li>
<li class="phone" style="color: white">{{$profile->phone}}</li>
<li class="email" style="color: white"> &nbsp;Email: {{$profile->email}}</li>
</ul>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
<div class="footer-box">
<h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
<ul class="contact-us p-0">
<li>
<ul class="p-0">
<li class="p-0 news-letter"> Sign Up to our Newsletter to get the latest news and offers.</li>
<li class="p-0">
<div>
<input class="form-control" type="text" placeholder="Email address" name="email1" required="required">
</div>
</li>

<li class="p-0"><button type="button" class="btn btn-outline-yello px-5">
Send</button> </li>
</ul>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>








<!-- footter area start -->
<hr class="m-0" style="background-color: #4d4d4d;">
<!--      footer bottom area start -->
<div class="footer-area-bottom pb-2">
<div class="px-5">
<div class="row ">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 px-0">
<ul class="p-0">
<li><a href="http://satt.team/" target="_blank">About SATT</a></li>
<li><a href="{{URL::to('/career')}}" target="_blank">Careers</a></li>
<li><a href="{{URL::to('/policy')}}">Privacy Policy</a></li>

</ul>
<p class="pt-2">© 2019 SATT IT All Rights Reserved.</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 px-0 text-center">

<ul class="footer-social">
<li><a href="{{$profile->fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="{{$profile->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="{{$profile->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<li><a href="{{$profile->youtube}}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
<li><a href="{{$profile->google}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>

<!--      footer bottom area end -->  <script type="text/javascript">         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();         (function(){             var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];             s1.async=true;             s1.src='https://embed.tawk.to/5bf03af440105007f3787464/default';             s1.charset='UTF-8';             s1.setAttribute('crossorigin','*');             s0.parentNode.insertBefore(s1,s0);         })();     </script>

<!-- vendors -->

<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
@stack('js')
</body>

</html>
