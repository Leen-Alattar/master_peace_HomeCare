@extends('interface.layout.master')
@section('content')
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity-3 ptb-150" style="background-image:url(assets/img/bg/bg3.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h1>about us</h1>
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="index.html">home</a></li>
									<li><span>Book now</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- service-booking-area-start -->
		<div class="service-booking-area" style="background-image:url(assets/img/bg/all8.png);">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="works-title title mt-80 mb-50">
							<h3>Book Now</h3>
						</div>
						<div class="row">
						<form action="#" id="service-booking">
							@foreach ($services as $service)
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
									<option value="{{$service->id}}">{{$service->name}}</option>
									
								</select>
							</div>	
							@endforeach						
							<button type="submit">Request a Callback</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- service-booking-area-end -->
		@endsection
	
		