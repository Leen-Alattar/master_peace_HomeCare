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
									<li><span>about</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		{{-- user profile --}}
		<table class="table">
			<thead>

			  <tr>
				<th>Id</th>
				<th>Orderd Service</th>
				<th>num_of_hours</th>
				<th>num_of_workers</th>
				<th>date</th>
				<th>time</th>
				<th>location</th>
				<th>notes</th>
				<th>Total Price</th>
			 </tr>
			</thead>
					

			<tbody>
			  @foreach ($orders as $order)
			  <tr>
				<td>{{$order->id}}</td>
				<td>{{$order->name}}</</td>
				<td>{{$order->num_of_hours}}</label></td>
				<td>{{$order->num_of_workers}} </td>
				<td>{{$order->date}} </td>
				<td>{{$order->time}} </td>
				<td>{{$order->location}} </td>
				<td>{{$order->notes}}</td>
				<td><label class="badge badge-success">{{$order->total_price}}</label></td>
				
				{{-- <td>
				  <form action = "{{route("order.destroy" , $order->id )}} " method = "POST">
					  @csrf
					 @method('delete')
					 <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
				 </form> </td> --}}
			 <td>
			  </tr>
			  @endforeach
			</tbody>
		  </table>
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
		<!-- action-area-end -->
		@endsection
	
		