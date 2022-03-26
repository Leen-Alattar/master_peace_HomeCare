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
                 
                      
                  
                  <tr>
                    <th>Id</th>
                    <th>Service Name</th>
                    <th>Service Image</th>
                    <th>description</th>
                    <th>price_per_hour</th>
                    <th>min_service_hour</th>
                    <th>max_service_hour</th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                		

                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <td>{{$service->id}}</td>
                    <td><label class="badge badge-success">{{$service->name}}</label></td>
                    <td><img class ="w-20" src="{{asset('images/'.$service->image)}}" alt="Image"></td>
                    <td>{{$service->description}}</</td>
                    <td><label class="badge badge-success">{{$service->price_per_hour}}</label></td>
                    <td><label class="badge badge-success">{{$service->min_hour}}</label></td>
                    <td><label class="badge badge-success">{{$service->max_hour}}</label></td>
                    <td>
                      <form action = "{{route("service.destroy" , $service->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("service.edit" , $service->id )}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <a href="{{route("service.create")}}">
                <button type="button" class="btn btn-primary">Add </button>
                    </a>
            </div>
          </div>
        </div>
       
    
@endsection