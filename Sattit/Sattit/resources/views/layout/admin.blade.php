<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SATT IT - Mission Of Change</title>

	<!-- Global stylesheets -->
	<link href="{{asset('backend/https:/fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/css/core.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.css')}}">

	<!-- /global stylesheets -->

	<!-- Core JS files -->
	
	
	<!-- /theme JS files -->
<style type="text/css">
	.navbar-brand>img {
		margin-top: -3.5%;
		margin-left: 30%;
	}
</style>
@stack('css')
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img style="height: 32px;width: 110px;" src="{{asset('backend/global_assets/images/logo3.png')}}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">

				
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('backend/global_assets/images/placeholders/placeholder.png')}}" alt="">
						<span>SATT IT</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{URL::to('/admin/profile')}}"><i class="icon-user-plus"></i>Satt profile</a></li>
					
					
					
						<li><a href="{{asset('/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
		{{-- 			<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{asset('backend/global_assets/images/placeholders/placeholder.png')}}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">SATT IT</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Talaimary Road,Rajshahi
									</div>
								</div>
							</div>
						</div>
					</div> --}}
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								 <li  @if(str_is('*/admin/home*', Request::fullurl())) class="active" @endif><a href="{{URL::to('/admin/home')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								 <li  @if(str_is('*/admin/footer*', Request::fullurl())) class="active" @endif><a href="{{URL::to('/admin/footer')}}"><i class="icon-home4"></i> <span>Footer Section</span></a></li>
							
								 <li @if(str_is('*/admin/sector*', Request::fullurl())) class="active"
                       @elseif(str_is('*/admin/all-sector*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-copy"></i> <span>Sector</span></a>
									<ul>
										<li @if(str_is('*/admin/sector*', Request::fullurl())) class="active" @endif><a href="{{ asset('/admin/sector') }}">Add Sector</a></li>
										<li @if(str_is('*/admin/all-sector*', Request::fullurl())) class="active" @endif><a href="{{ asset('/admin/all-sector') }}">All Sector</a></li>
									</ul>
								</li>
								<!-- /main -->

								<!-- Software -->
								<li class="navigation-header"><span>Software</span> <i class="icon-menu" title="Software"></i></li>
									 <li @if(str_is('*/software/category*', Request::fullurl())) class="active"
                       @elseif(str_is('*/software/all-category*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Category</span></a>
									<ul>
										<li @if(str_is('*/software/category*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/category') }}">Add Category</a></li>
										<li @if(str_is('*/software/all-category*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/all-category') }}">All Category</a></li>
									</ul>
								</li>
									<li @if(str_is('*/software/add-software*', Request::fullurl())) class="active"
                       @elseif(str_is('*/software/all-software*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Software</span></a>
									<ul>
										<li @if(str_is('*/software/add-software*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/add-software') }}">Add Software</a></li>
										<li @if(str_is('*/software/all-software*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/all-software') }}">All Software</a></li>
									</ul>
								</li>
								<li @if(str_is('*/software/add-credit*', Request::fullurl())) class="active"
                       @elseif(str_is('*/software/add-framework*', Request::fullurl())) class="active"    @elseif(str_is('*/software/add-language*', Request::fullurl())) class="active"   
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>More</span></a>
									<ul>
										<li @if(str_is('*/software/add-credit*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/add-credit') }}">Credit</a></li>
										<li @if(str_is('*/software/add-framework*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/add-framework') }}">Framework</a></li>
										<li @if(str_is('*/software/add-language*', Request::fullurl())) class="active" @endif><a href="{{ asset('/software/add-language') }}">Language</a></li>
									</ul>
								</li>
								<!-- /Software -->

								<!-- template -->
								<li class="navigation-header"><span>Template</span> <i class="icon-menu" title="template"></i></li>
								 <li @if(str_is('*/template/category*', Request::fullurl())) class="active"
                       @elseif(str_is('*/template/category*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Category</span></a>
									<ul>
										<li @if(str_is('*/template/category*', Request::fullurl())) class="active" @endif><a href="{{ asset('/template/category') }}">Add Category</a></li>
										<li @if(str_is('*/template/category*', Request::fullurl())) class="active" @endif><a href="{{ asset('/template/category') }}">All Category</a></li>
									</ul>
								</li>
									 <li @if(str_is('*/template/add-template*', Request::fullurl())) class="active"
                       @elseif(str_is('*/template/all-template*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Template</span></a>
									<ul>
										<li @if(str_is('*/template/add-template*', Request::fullurl())) class="active" @endif><a href="{{ asset('/template/add-template') }}">Add Template</a></li>
										<li @if(str_is('*/template/all-template*', Request::fullurl())) class="active" @endif><a href="{{ asset('/template/all-template') }}">All Template</a></li>
									</ul>
								</li>
								<li>
								<!-- /template -->

								<!-- Graphics -->
								<li class="navigation-header"><span>Graphics</span> <i class="icon-menu" title="Graphics"></i></li>
								 <li @if(str_is('*/graphics/category*', Request::fullurl())) class="active"
                       @elseif(str_is('*/graphics/all-category*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Category</span></a>
									<ul>
										<li @if(str_is('*/graphics/category*', Request::fullurl())) class="active" @endif><a href="{{ asset('/graphics/category') }}">Add Category</a></li>
										<li @if(str_is('*/graphics/all-category*', Request::fullurl())) class="active" @endif><a href="{{ asset('/graphics/all-category') }}">All Category</a></li>
									</ul>
								</li>
									 <li @if(str_is('*/graphics/add-design*', Request::fullurl())) class="active"
                       @elseif(str_is('*/graphics/all-design*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Design</span></a>
									<ul>
										<li @if(str_is('*/graphics/add-design*', Request::fullurl())) class="active" @endif><a href="{{ asset('/graphics/add-design') }}">Add Design</a></li>
										<li @if(str_is('*/graphics/all-design*', Request::fullurl())) class="active" @endif><a href="{{ asset('/graphics/all-design') }}">All Design</a></li>
									</ul>
								</li>
								<li>
								<!-- /Graphics -->
								<!-- SEO -->
								<li class="navigation-header"><span>SEO</span> <i class="icon-menu" title="SEO"></i></li>
								<li @if(str_is('*/admin/add-seo*', Request::fullurl())) class="active"
                       @elseif(str_is('*/admin/all-seo*', Request::fullurl())) class="active"      
                             @endelseif
                        @endif>
									<a href="#"><i class="icon-stack2"></i> <span>Page Seo</span></a>
									<ul>
										<li @if(str_is('*/admin/add-seo*', Request::fullurl())) class="active" @endif><a href="{{ asset('/admin/add-seo') }}">Add Page Seo</a></li>
										<li @if(str_is('*/admin/all-seo*', Request::fullurl())) class="active" @endif><a href="{{ asset('/admin/all-seo') }}">All Page Seo</a></li>
									</ul>
								</li>
									<li>
									<a href="#"><i class="icon-stack2"></i> <span>Insert SEO</span></a>
									<ul>
										<?php
										$seo = DB::table('page_seo')->get();
										foreach($seo as $s){
											?>
											<li @if(str_is('*/admin/insert_seo/*', Request::fullurl())) class="active" @endif><a href="{{ asset('/admin/insert_seo/'.$s->seo_id) }}">{{$s->page}}</a></li>

										<?php } ?>

										
										
										
									</ul>
								</li>
								<li>
								<!-- /SEO -->

								

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper container">
     @yield('content')
				
					

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>

	
	
<script src="{{asset('backend/global_assets/js/core/libraries/jquery.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/datatables_extension_buttons_html5.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js')}}"></script>
<script src="{{asset('backend/global_assets/js/demo_pages/datatables_responsive.js')}}">
</script>	<!-- /page container -->
	
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('backend/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('backend/js/app.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<script src="{{asset('js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
	@stack('js')

</body>
</html>
