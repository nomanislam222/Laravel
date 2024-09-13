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


@endpush
@section('content')
    <!-- slider-area Start -->
    <div class="Contact-Us-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color: white">Contact Us</h2>
                        <p><a href="{{asset('/')}}" style="color: white">Home &nbsp; </a><i class="fa fa-long-arrow-right"></i>  &nbsp;Contact Us</p>
                    </div>
                </div>
            </div>
    </div>
    <!-- slider-area End -->
    <!-- contact-form-area -->
    <div class="contact-form-area pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-text text-center wow fadeInUp">
                        <h2 class="font-weight-bold">How Can We Help You?</h2>
                        <p>Your questions and comments are important to us. That's why we provide
                            <br> you with many quick and convenient ways to contact .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="contact-corporate wow fadeInUp">
                        <h3 class="text-center mt-0"> Headquarters</h3>
                        <div class="single-contact-corporate wow fadeInUp">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <p>524, Manik Mia Road,
                                <br>Talaimari, Rajshahi-6204, Bangladesh</p>
                        </div>
                        <div class="single-contact-corporate wow fadeInUp">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>Feel free to call us on</p>
                            <a href="tel:01850054500">(+88) 01850054500 </a>
                            
                        </div>
                        <div class="single-contact-corporate wow fadeInUp">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>Drop us a line</p>
                            <a href="mailto:sattitbd@gmail.com">info@sattit.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="contact-form wow fadeInUp">
                        <h3 class="text-center mt-0">Send Us Message Now</h3>
                        <span class="h4 text-center mt-0" style="display: none" id="contact_form_msg">Thank you for your inquiry. We will respond as soon as possible generally within a few hours. If you do not hear from us within 24 hours, kindly give us a call at +880 18500 54500 as your message did not get to us.</span>
                        <span class="h4 text-center mt-0" style="display: none" id="contact_form_msg_error">Error!!! Sometihing went wrong, please try again properly. Or call us +880 18500 54500 </span>
                        <form id="contact_form">
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp">
                                    <input type="text" id="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-md-6 wow fadeInUp">
                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp">
                                    <input type="text" id="mobile" name="mobile" placeholder="Phone" required>
                                </div>
                                <div class="col-md-6 wow fadeInUp">
                                    <input type="text" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 wow fadeInUp">
                                    <textarea name="message" id="message" cols="30" rows="12" placeholder="Write your Message" required></textarea>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12 wow fadeInUp">
                                    <input type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
        <section class="mt-4" style="background-color: #fff;">
        <div class="container"> 
       <div class="row" >
           <div class="col-md-12 mb-5">
               <div class="contact-map wow fadeInUp">

                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.5267154312!2d88.62362141451383!3d24.362973871016464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754fc8cffffffff%3A0x398330dea7d93595!2sSATT+IT!5e0!3m2!1sen!2sbd!4v1548585932805" width="100%" height="400px"  frameborder="0" style="border:0" allowfullscreen></iframe>
                   <script src="js/map.js"></script>

               </div>
           </div>
           </div>
       </div>
   </section>
@endsection
@push('js')
<script src="{{asset('frontend/corasol/owl.carousel.js')}}"></script>
@endpush