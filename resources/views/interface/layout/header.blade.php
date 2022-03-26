<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HomeCare  Home-service</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
        <!-- Place favicon.ico in the root directory -->
		
		
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/et-line-icon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/headline.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/Pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		
        
    </head>
    <body>
		<header>
			<!-- header-top-area-start -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-md-6 hidden-sm hidden-xs">
							<div class="header-left">
								<ul class="header-left-text">
									<li><a href="#">Open Hours</a> : 8.00 - 18.00 -everyday</li>
								</ul>
								<ul class="header-left-text">
									<li><a href="#">Contact</a> : 0 (77) 55-27070</li> 
								</ul>
							</div>
						</div>
						{{-- <div class="col-md-6 col-sm-12 col-xs-12">
							<div class="header-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
				<!-- main-menu-area-start -->
				<div class="main-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<div class="logo">
									<a href="index.html"><img src="{{asset('assets/img/logo/logo2.png')}}" alt="" /></a>
								</div>
							</div>
							<div class="col-md-10">
							<div class="get-a-quote floatright hidden-sm hidden-xs">
									<a href="http://127.0.0.1:8000/ourservice">Book Now</a>
								</div>
								<div class="main-menu floatright">
									<nav>
										<ul>
											<li class="active"><a href="http://127.0.0.1:8000/">home</a></li>
											<li><a href="http://127.0.0.1:8000/ourservice">service</a></li>
											<li><a href="http://127.0.0.1:8000/ourgallery">gallery</a></li>
											<li><a href="{{route('public.joinus')}}">Join Us</a></li>
											<li><a href="http://127.0.0.1:8000/ouraboutus">About Us</a></li>
											@guest
											<li class="drop"><a href="http://127.0.0.1:8000/login">Login</a>
											   
											</li>
											<li class="drop"><a href="http://127.0.0.1:8000/register">Register</a>
											  
											</li>
											@endguest
	
											@auth
											<li>
										
												<a class="drop" href="{{ route('logout') }}"
												   onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
			
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													@csrf
												</form>
											
										</li>
											@endauth
										</ul>
									</nav>
								</div>						
							</div>	
						<div class="col-xs-12"><div class="mobile-menu"></div></div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
			</header>