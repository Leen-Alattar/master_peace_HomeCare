@extends('interface.layout.master')
@section('content')
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity-3 ptb-150" style="background-image:url(assets/img/bg/bg3.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h1>Services</h1>
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="index.html">home</a></li>
									<li><span>Services</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- featured-services-area-start -->
		<div class="featured-services-area pt-120 pb-90 gray-bg">
			<div class="container">
				<div class="row">
	
					@foreach ($services as $service)
					<div class="col-md-4 col-sm-6">
						<div class="featured-services-wrapper mb-30 white-bg text-center">
							<div class="featured-services-img">
								<img src="{{asset ('images/'.$service->image)}}" alt="" />
							</div>
							<div class="featured-services-text text-center">
								<h3><a href="single-service.html">{{$service->name}}</a></h3>
								<p>{{$service->description}}</p>
								<a  href="{{route('public.book',['id'=>$service->id])}}">Book Now</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- featured-services-area-end -->
		{{-- <!-- pricing-area-start -->
		<div class="pricing-area pt-120 pb-120">
			<div class="container">				
				<div class="section-title text-center mb-110">
					<span>What we offer </span>
					<h3>Pricing Plans</h3>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
				</div>
				<div class="row m-0 pricing-inner">	
					<div class="col-md-4 col-sm-4">
						<div class="pricing-wrapper text-center mb-30">
							<div class="pricing-icon">
								<img src="assets/img/pricing/1.png" alt="" />
							</div>
							<div class="pricing-head">
								<h3>Basic Clean</h3>
							</div>
							<div class="price">
								<span>$</span>29
							</div>
							<ul class="pricing-menu">
								<li>Carpet Cleaning</li>
								<li>Upholstery Cleaning</li>
								<li>House Cleaning</li>
								<li>Apartment Cleaning</li>
								<li>Building Cleaning</li>
							</ul>
							<div class="pricing-btn">
								<a href="#">Choose Plan</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="pricing-wrapper text-center active white-bg mb-30">
							<div class="pricing-icon">
								<img src="assets/img/pricing/2.png" alt="" />
							</div>
							<div class="pricing-head">
								<h3>Standart Clean</h3>
							</div>
							<div class="price">
								<span>$</span>39
							</div>
							<ul class="pricing-menu">
								<li>Carpet Cleaning</li>
								<li>Upholstery Cleaning</li>
								<li>House Cleaning</li>
								<li>Apartment Cleaning</li>
								<li>Building Cleaning</li>
							</ul>
							<div class="pricing-btn active">
								<a href="#">Choose Plan</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="pricing-wrapper text-center mb-30">
							<div class="pricing-icon">
								<img src="assets/img/pricing/3.png" alt="" />
							</div>
							<div class="pricing-head">
								<h3>Basic Clean</h3>
							</div>
							<div class="price">
								<span>$</span>29
							</div>
							<ul class="pricing-menu">
								<li>Carpet Cleaning</li>
								<li>Upholstery Cleaning</li>
								<li>House Cleaning</li>
								<li>Apartment Cleaning</li>
								<li>Building Cleaning</li>
							</ul>
							<div class="pricing-btn">
								<a href="#">Choose Plan</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pricing-area-end --> --}}
	
		{{-- <!-- action-area-start -->
		<div class="action-area green-bg pt-100 pb-65">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="action-wrapper mb-30">
							<div class="action-text">
								<h1>Don’t Miss any Action!</h1>
								<p>But I must explain to you how alltmistaken idea of denouncing</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="action-right-wrapper mb-30">
							<div class="action-form">
								<form action="#">
									<input placeholder="Your email address" type="email">
									<button>subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- action-area-end --> --}}
		@endsection
	