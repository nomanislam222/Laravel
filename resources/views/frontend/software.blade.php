@extends('layout.frontend')
@section('head')


@if($details->seo_title)

<meta charset="utf-8">
<meta name="description" content="{{$details->seo_des}}"/>
<meta name="keywords" content="{{$details->seo_keyword}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Primary Meta Tags -->
<meta name="title" content="{{$details->seo_title}}">
<meta name="description" content="{{$details->seo_des}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:title" content="{{$details->seo_title}}">
<meta property="og:description" content="{{$details->seo_des}}">
<meta property="og:image" content="https://sattit.com/img/Logo2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="{{$details->seo_title}}">
<meta property="twitter:description" content="{{$details->seo_des}}">
<meta property="twitter:image" content="https://sattit.com/img/Logo2.png">


<title>{{$details->seo_title}}</title>
@else
@endif



@endsection
@push('css')

    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}">
@endpush        
@section('content')
<!-- slider-area Start -->
<div class="contact-page-slider0">
<div class="container">
<div class="row">
<div class="col-md-12">
    <h2 class="mt-4">Our Product</h2>
    <p><a href="../index.html">Home </a><i class="fa fa-long-arrow-right"></i> &nbsp; <a href="../products-details.html">Product</a> <i class="fa fa-long-arrow-right"></i> &nbsp; School Management Software </p>
</div>
</div>
</div>
</div>
<!-- slider-area End -->

<!--    Navs Tabs area start -->
<section class="products-single-page">
<div class="container">
<div class="row">
<div class="col-md-8">
    <h2 class="pt-4">{{$details->name}} Management Software</h2>
    <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist" style="border:none">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md" aria-selected="true">English</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md" aria-selected="false">বাংলা</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContentMD" style="border:none">
        <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
            <div class="card">
                <img class="card-img-top" src="{{asset('storage/app/public/'.$details->main_pic_e)}}" alt="Card image cap">
                <div class="card-body text-center">

                    <button class="btn " style="background-color: teal"><a href="{{$details->link}}" target="_blank" style="color:white">Live Preview</a></button>




                </div>
            </div><br>
                      <h1 style="text-align:center; color: teal; border-bottom: solid 2px teal; padding-bottom: 5px;">Application Features                 </h1><p class="feature_description">With our <a class="a-tag"> SATT {{$details->name}} Management Software</a>,{{$details->feature_des_e}}</p> <img class="card-img-top" src="{{asset('frontend/img/feature_fast_img.png')}}" alt="Card image cap"><br><br><img class="card-img-top" src="{{asset('storage/app/public/'.$details->feature_pic)}}" alt="key_feature">
             <br><br>
            
 
    
{!!$details->details_e!!}   
            

        </div>
        <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
            <div class="card">
                <img class="card-img-top" src="{{asset('storage/app/public/'.$details->main_pic_b)}}" alt="Card image cap">
                <div class="card-body text-center">

                    <button class="btn" style="background-color: teal"><a href="{{$details->link}}" target="_blank" style="color:white">Live Preview</a></button></div>
            </div><br>
            <h1 style="text-align:center; color: teal; border-bottom: solid 2px teal; padding-bottom: 5px;">অ্যাপ্লিকেশন ফিচারসমুহ</h1><p class = "feature_description">আমাদের <a href="#"> SATT {{$details->name}} ম্যানেজমেন্ট সফটওয়্যার </a> {{$details->feature_des_b}}</p><img class="card-img-top" src="{{asset('frontend/img/feature_fast_img.png')}}" alt="Card image cap"><br><br><img class="card-img-top" src="{{asset('storage/app/public/'.$details->feature_pic)}}" alt="key_feature">
            <br><br>
 
  {!!$details->details_b!!}
 


        </div>

    </div>

   
   <div class="card my-2">
                                <div class="card-body">
    <div class="Features ">
        <h4>Satt Features:</h4>
        <ul style="margin-left:25px">
            <li> All time demo active.</li>
            <li>Two days seminar on uses of software.</li>
            <li>01(one) month free software service support.</li>
            <li>30 days Money Back Guarantee(condition apply).</li>
            <li>Unlimited Support over phone, email or live chat.</li>
            <li>Free Video seminar.</li>
            <li>24/7 online support.</li>
        </ul>
    </div>  
    </div>  
    </div>
    
    
    
    <div class="card my-2">
                                <div class="card-body">
    <div class="Features">
        <h4>Credits:</h4>

        <ul style="margin-left:25px">
        	@foreach($credit as $cre)
            <li>{{$cre->name}} – <a href="https://laravel.com/" rel="nofollow">{{$cre->link}}</a>
            </li>
           @endforeach
        </ul>
    </div>
    </div>
    </div>
    <br>

    <p><strong>Note: </strong>Images are only for demo purpose.<br></p>


</div>

<div class="col-md-4 mt-40 ">

    <div class="License p-4 sis">
        <div class="dropdown left-side mt-4">
            <p class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false" style="font-weight: bold; font-size:25px">
                Regular License
            </p>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a class="dropdown-item" href="#!">Action</a>
                <a class="dropdown-item" href="#!">Another action</a>
            </div>

        </div>

        <p><i class="fa fa-check"></i> &nbsp; Quality checked by Satt</p>
        <p><i class="fa fa-check"></i> &nbsp; Future updates</p>
        <p><i class="fa fa-check"></i> &nbsp; 24/7 support </p>

        <br>

        <button class="btn btn" style="background-color: teal"><a href="https://sattit.com/contact.html" style="color:white;">Buy Now</a></button>

    </div>
    <br>
    <br>
     
    <div class="update mt-4">
        <div class="card" style="width: ">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Last Update &nbsp; &nbsp; <span class="ml-5"> <a href="#">{{$details->update_d}}</a> </span> </li>

                <li class="list-group-item">Created &nbsp; &nbsp; &nbsp; <a href="#"> <span class="ml-5 pl-4"> {{$details->create_d}} </span> </a> </li>

                <li class="list-group-item">High Resolution &nbsp; &nbsp; <a href="#"> <span class="ml-4 pl-2"> Yes</span></a></li>

                <li class="list-group-item">Compatible Browsers &nbsp; &nbsp; <a href="#"> <span> Firefox, Opera, Chrome </span> </a></li>

                <li class="list-group-item">Documentation &nbsp; &nbsp; <a href="#"> <span class="ml-4 pl-2"> Well Documented </span>
                    </a></li>
                <li class="list-group-item">Layout &nbsp; &nbsp; <a href="#"> <span class="ml-5 pl-4"> Responsive </span>
                    </a></li>
                <li class="list-group-item">Languages &nbsp; &nbsp; <a href="#"> <span  class="ml-4 pl-4"> @foreach($language as $lang) {{$lang->name}}, @endforeach</span>
                    </a></li>
                <li class="list-group-item">Framework &nbsp; &nbsp; <a href="#"> <span class="ml-4 pl-4">@foreach($frame as $framework) {{$framework->name}}, @endforeach </span>
                    </a></li>

            </ul>
        </div>
    </div>
    <br>
    <br>
    <div class="text-center">
        © All Rights Reserved satt it
        <br>
        <a href="https://sattit.com/contact.html">Contact the satt it Help Team</a>
    </div>
</div>

</div>
</div>
</section>
<!--    cards area start -->
@endsection