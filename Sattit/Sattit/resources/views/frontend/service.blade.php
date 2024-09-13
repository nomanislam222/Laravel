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
    <div class="services-slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Our Services</h2>
                        <p><a href="{{asset('/')}}">Home &nbsp; </a><i class="fa fa-long-arrow-right"></i>  &nbsp;Services</p>
                    </div>
                </div>
            </div>
    </div>
    <!-- slider-area End -->

    <!--=================================
special-feature -->
   
   
<!--   services fast area start -->
    <section class="page-section-ptb position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        
                        <h4 class="title-effect">Our Services</h4>
                        <p>We provide the best and unique Customizable Website, Web Application, Software and more for your successful Business.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 xs-mb-40 my-3">
                    <div class="feature-box h-100">
                        <div class="feature-box-content">
                            <i class="fa fa-paint-brush blue"></i>
                            <h4>Unique &amp; Clean</h4>
                            <p>It's always nice to browse some nice and clean websites. It is a good way to get more clients for Business.</p>
                        </div>
                        <a href="{{asset('/details/web-app')}}">Read more</a>
                        <div class="feature-box-img" style="background-image:url({{asset('frontend/img/123-11.jpg')}});"></div>
                        <span class="feature-border"></span>
                    </div>
                </div>
                <div class="col-md-4 xs-mb-40 my-3">
                    <div class="feature-box h-100">
                        <div class="feature-box-content">
                            <i class="fa fa-arrows"></i>
                            <h4>Flexible Layout</h4>
                            <p>Responsive and Flexible layout. This allows the web page to stretch and contract relative to the user's screen.</p>
                        </div>
                        <a href="{{asset('/details/web-app')}}">Read more</a>
                        <div class="feature-box-img" style="background-image:url({{asset('frontend/img/4.png')}})"></div>
                        <span class="feature-border"></span>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="feature-box h-100">
                        <div class="feature-box-content">
                            <i class="fa fa-heart"></i>
                            <h5 class="pt-4">Development Techniques</h5>
                            <p>With modern designed and latest development techniques such as PHP, WordPress, Laravel, Codeigniter.</p>
                        </div>
                        <a href="{{asset('/details/web-app')}}">Read more </a>
                        <div class="feature-box-img" style="background-image:url({{asset('frontend/img/123.jpg')}}) "></div>
                        <span class="feature-border"></span>
                    </div>
                </div>
            </div>
        </div> 
    </section>
<!--   services fast area end -->
   
   
    <!--    web design area    -->

    <section class="web-design-area my-5 py-2 pb-4">
        <div class="container">
            <a href="Detailswebdesign.html">  <h4 class="web-design-text pb-4">Web Designs</h4> </a>
            <div class="row ">
                <div class="col-xl-4 my-3 ">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('frontend/img/Web%20Template%20design.png')}}" class="card-img-top" alt="web-design">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="webtempletedesign.html"> Web Template design </a></h5>
                            <p class="card-text mb-4 p-1">A template is a pre-made website design with plugins or components in some cases. A website template is made with code by a developer.</p>
                            <a href="webtempletedesign.html" class="card-link">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 my-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('frontend/img/We Design.png')}}" class="card-img-top" alt="web-design">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="Staticwebdesign.html">Static website design</a></h5>
                            <p class="card-text mb-4 p-1"> Static sites are the most basic type of website and are the easiest to create. Unlike dynamic websites, they do not require .</p>
                            <a href="Staticwebdesign.html" class="card-link" >See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-4 my-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('frontend/img/Mask Group 1.png')}}" class="card-img-top" alt="web-design">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="responsivewebdesign.html">Responsive web design</a></h5>
                            <p class="card-text mb-4 p-1">Responsive web design is a method or an approach where a designer creates a web page which resizes itself according to the type of device it is seen through.</p>
                            <a href="responsivewebdesign.html" class="card-link">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    web design area end    -->


    <!--   our services area     -->

    <section class="web-apps-area my-5 py-5">
        <div class="container">
            <div class="text-right py-3">
                <a href="products-details.html"> <h4 class="web-apps-text">Web Apps</h4> </a> 
            </div>
            <div class="row">
                <div class="col-xl-4 my-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('frontend/img/Dynamic.png')}}" class="card-img-top" alt="web-design">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="web-app.html">Dynamic Website</a></h5>
                            <p class="card-text mb-5">A dynamic web page is a web page that displays different content each time it's viewed. For example, the page may change with the time of day, the user that accesses the webpage, or the type of user interaction. There are two types of dynamic web pages.</p>
                            <a href="{{asset('/web-app')}}" class="card-link">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 my-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('frontend/img/Development%20with%20CMS.png')}}" class="card-img-top" alt="web-design">
                        <div class="card-body">
                            <h5 class="card-title"><a href="web-app.html">Development with CMS</a></h5>
                            <p class="card-text mb-5">A content management system (CMS) is a software application or set of related programs that are used to create and manage digital content. CMSes are typically used for enterprise content management (ECM) and web content management (WCM).
                            </p>
                            <a href="{{asset('/web-app')}}" class="card-link">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 my-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('frontend/img/Custom%20Web.png')}}" class="card-img-top" alt="web-design">
                        <div class="card-body">
                            <h5 class="card-title"><a href="web-app.html">Custom Web Application</a></h5>
                            <p class="card-text mb-5 pb-4">The word “custom” here as, fitting to people’s desires. When someone build a web application suitable for a specific requirement of a specific client/organization, it is termed as custom web application.
                            </p>
                            <a href="{{asset('/web-app')}}" class="card-link">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--   our services area end     -->

    <!--   our services area end     -->
    <section class="service-two-area pb-5 Graphic-Design-area">
        <div class="container">
            <div class=" py-2">
                <a href="details-Graphics.html"> <h4 class="Graphic-Design-text">Graphic Design</h4> </a>
            </div>
            <div class="row">
                <div class="col-md-4 my-3">
                       <div class="card single-service">
                           <img src="{{asset('frontend/img/Logo.jpg')}}" class="card-img-top" alt="..." height="200px;">
                           <div class="card-body">
                               <h5 class="card-title"> <a href="logo-design.html">Logo Design</a></h5>
                               <p  class="card-text">A logo is a graphic mark, emblem, or symbol used to aid and promote public identification and recognition. It may be of an abstract or figurative design the name it represents as in a wordmark.</p>
                               <a href="{{asset('/design/logo-design')}}" class="card-link my-3">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                           </div>
                       </div> 
                   </div>
                <div class="col-md-4 my-3">
                        <div class="card single-service">
                            <img src="{{asset('frontend/img/Business%20card%20design.png')}}" class="card-img-top" alt="..." height="200px;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="business-card.html">Card Design</a></h5>
                                <p class="card-text">Business cards can be mass-produced by a printshop or printed at home using business card software. Such software typically contains design, layout tools, and text editing tools .
                                </p>
                                <a href="{{asset('/design/business-card-design')}}" class="card-link my-3">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4 my-3">
                        <div class="card single-service">
                            <img src="{{asset('frontend/img/Banner.png')}}" class="card-img-top" alt="..." height="200px;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="banner-details.html">Banner Design</a></h5>
                                <p class="card-text">An easier way to keep your banner ad simple is to take colors, typeface, and other elements of your logo design. A logo generally is a simple design with one or two colors and fonts.
                                </p>
                                <a href="{{asset('/design/banner-design')}}" class="card-link my-3">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--   our services area     -->


<!--digital markating section start -->

    <!-- Services section -->
    <section id="what-we-do" class="py-5 Digital-Markating-area">
        <div class="container">
            <div class=" py-4">
                <a href="seo.html">  <h4 class="Graphic-Design-text"> Digital Markating </h4> </a>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-3">
                    <div class="card">
                        <div class="card-block block-1">
                            <h5 class="card-title pb-2"><a href="seo.html">S E O</a></h5>
                            <p class="card-text pb-4">SEO is most important for making your website easy to understand. it helps the engines to figure page information and how it may be useful for users.</p>
                            <a href="{{asset('/seo')}}" title="Read more" class="read-more" >See More<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-3">
                    <div class="card">
                        <div class="card-block block-2">
                            <h5 class="card-title"><a href="seo.html">S E M</a></h5>
                            <p class="card-text pb-4">SEM is needy to  increase relevant traffic to your website, through higher rankings on search engines.At present, the best way to rank the website fast.</p>
                            <a href="{{asset('/seo')}}" title="Read more" class="read-more" >See More<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-3">
                    <div class="card">
                        <div class="card-block block-3">
                            <h5 class="card-title"> <a href="seo.html">Website Strategy</a></h5>
                            <p class="card-text pb-4">A web strategy is a long-term strategic business plan, indicating how to create and develop a company's online presence <br> <br></p>
                            <a href="{{asset('/seo')}}" title="Read more" class="read-more" >See More<i class="fa fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </section>
<!--digita markating section end -->


<!-- why choose us area start-->
   
    <div class="why-choose-us pb-5 pt-3" > 
   <div class="container">
       <div class="light-section-title text-center pt-5">
           <h2>Why Choose Us?</h2>
           <h4>Reason to Trus Us</h4>
           <div class="space"></div>
           <p>
               When you work with SATT IT, we have one goal - to help you reach your business and technology objectives.
           </p>
       </div>
       <div class="row">
           <div class="col-md-4 mb-3">
               <div class="choose-us-item text-center">
                   <div class="choose-icon">
                       <i><img src="{{asset('frontend/img/Great%20sevice.png')}}" alt=""></i>  
                   </div>
                   <h5 class="pb-2">Great Service </h5>
                   <p class="pb-4">We offer great service in design, development, and marketing of your website .</p>
                   <a href="{{asset('/details/web-app')}}">KNOW MORE</a>
               </div>
           </div>
           <div class="col-md-4 mb-3">
               <div class="choose-us-item text-center">
                   <div class="choose-icon">
                       <i><img class="ml-1" src="{{asset('frontend/img/Creativity%20and%20quality.png')}}" alt=""></i> 
                   </div>
                   <h5 class="pb-2">Creativity and quality</h5>
                   <p class="pb-4">Our solutions are an outcome of passion for creativity, innovation, and quality
                   </p>
                   <a href="{{asset('/details/web-app')}}">KNOW MORE</a>
               </div>
           </div>
           <div class="col-md-4 mb-3">
               <div class="choose-us-item text-center">
                   <div class="choose-icon">
                       <i ><img class="mt-2 ml-3" src="{{asset('frontend/img/skilled%20and%20certified.png')}}" alt=""></i> 
                   </div>
                   <h5 class="pb-2">skilled and certified</h5>
                   <p class="pb-4">Our developers, designers, and consultants are highly skilled and certified.</p>
                   <a href="{{asset('/details/web-app')}}">KNOW MORE</a>
               </div>
           </div>
       </div>
   </div>
    </div>
    
<!-- why choose us area start-->
@endsection