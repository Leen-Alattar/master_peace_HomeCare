@extends('interface.layout.master')
@section('content')
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity-3 ptb-150" style="background-image:url(assets/img/bg/bg3.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h1>Join Our Team </h1>
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="index.html">home</a></li>
									<li><span>Join Our Team</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-area-start -->
			<!-- works-area-end -->
		<!-- service-booking-area-start -->
		<div class="service-booking-area" style="background-image:url(assets/img/bg/all7.png);">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="works-title title mt-80 mb-50">
							<span>Join Our Team</span>
							<h3>How It Works</h3>
							<p>Are you looking for a job in one of the following fields Nursing , childCare and cleanning.fill your information below
								and we will get back to you soon.</p>
						</div>
						<div class="row">


						<form action="{{route('public.userprofile')}}" method="POST"enctype="multipart/form-data" id="service-booking">
							@csrf
							<div class="col-sm-6">
								<input name="name" placeholder="name" type="text">
							</div>
							<div class="col-sm-6">
								<input name="image" placeholder="image" type="file">
							</div>
							<div class="col-sm-6">
								<input name="age" placeholder="age" type="text">
							</div>
							<div class="col-sm-6">
								<input name="nationality" placeholder="nationality" type="text">
							</div>
							<div class="col-sm-6">
								<input name="phone" placeholder="Phone Number" type="text">
							</div>	
							<div class="col-sm-6">
								<select name="service_id" class="form-control">
									<option value="none" selected="" disabled="">Select Service</option>
									@foreach ($services as $service)
									<option value="{{$service->id}}">{{$service->name}}</option>
									@endforeach
								</select>
							</div>							
							<button type="submit">Request a Callback</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- service-booking-area-end -->
		<!-- contact-area-end -->
		<!-- action-area-start -->
		<div class="action-area green-bg pt-90 pb-65">
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
		<!-- action-area-end -->
		@endsection
	
	