@extends('interface.layout.master')
@section('content')
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity-3 ptb-150" style="background-image:url(https://firebasestorage.googleapis.com/v0/b/discordbot-b3b17.appspot.com/o/bg3.jpg?alt=media&token=250d140c-bdb6-4a1d-b5d1-e88e75600932)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h1>Now Let's Book Your Service </h1>
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="index.html">home</a></li>
									<li><span>Booking</span></li>
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
		<div class="service-booking-area" style="background-image:url(https://firebasestorage.googleapis.com/v0/b/discordbot-b3b17.appspot.com/o/leen%2Fall7.png?alt=media&token=c5d979fd-2980-4c77-b419-bde6994e4bf3);">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="works-title title mt-80 mb-50">
							<span>Book {{$service->name}} Service</span>
							<h3>How It Works</h3>
						<ul>
							<li>
								<b>Price per hour :</b> <span style="font-family: 'Courier New', Courier, monospace; color:black">{{$service->price_per_hour}} JD</span>
							</li>
							<li>
								<b>Price per hour :</b> <span style="font-family: 'Courier New', Courier, monospace; color:black">{{$service->max_hour}}</span>
							</li>
						</ul>
						</div>
						<div class="row">	
								
				

						<form action="{{route('public.usertable')}}" method="POST"enctype="multipart/form-data" id="service-booking">
							@csrf
							<input type="hidden" name="id" value={{$service->id}}>
							<div class="col-sm-6">
								<select name="num_of_hours" class="form-control" style="border radios ">
									<option value="none" selected="" disabled="">Num Of Hours</option>
									@php
										for($i = $service->min_hour ; $i<= $service->max_hour ; $i++   )	
										{
											echo "<option value={{$i}}>$i</option>";

										}
									@endphp
				
								</select>
							</div>		
							<div class="col-sm-6">
								<select name="num_of_workers" class="form-control">
									<option value="none" selected="" disabled="">Num Of Workers</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
							<div class="col-sm-6" class="form-control">
								<input name="date"  type="date">
							</div>	
							<div class="col-sm-6" class="form-control">
								<input name="time" type="time">
							</div>
							<div class="col-sm-6" class="form-control" >
								<input name="notes" placeholder="Add your Notes" type="textarea">
							</div>
							<div class="col-sm-6" class="form-control" >
								<input name="location" placeholder="location" type="textarea">
							</div>
							<input type="hidden" name="price_per_hour" value={{$service->price_per_hour}}>
								
							<button type="submit">Book Now</button>
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
	
	