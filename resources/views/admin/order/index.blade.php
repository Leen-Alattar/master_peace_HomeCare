@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Mange Service  </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service table</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <thead>
                    						created_at	updated_at	

                      
                  
                  <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Orderd Service</th>
                    <th>num_of_hours</th>
                    <th>num_of_workers</th>
                    <th>date</th>
                    <th>time</th>
                    <th>location</th>
                    <th>Total Price</th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                		

                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->service_id}}</</td>
                    <td>{{$order->num_of_hours}}</label></td>
                    <td>{{$order->num_of_workers}} </td>
                    <td>{{$order->date}} </td>
                    <td>{{$order->time}} </td>
                    <td>{{$order->location}} </td>
                    <td><label class="badge badge-success">{{$order->total_price}}</label></td>
                    
                    <td>
                      <form action = "{{route("order.destroy" , $order->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("order.edit" , $order->id )}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <a href="{{route("order.create")}}">
                <button type="button" class="btn btn-primary">Add </button>
                    </a>
            </div>
          </div>
        </div>
       
    
@endsection