@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Mange workers  </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page">workers table</li>
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
                    <th>Name </th>
                    <th>image</th>
                    <th>age</th>
                    <th>nationality</th>
                    <th>phone</th>
                    <th>status</th>
                    <th>Provided Service</th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($workers as $worker)
                  <tr>
                    <td>{{$worker->id}}</</td>
                    <td><label class="badge badge-success">{{$worker->name}}</label></td>
                    <td><img class ="w-20" src="{{asset('images/'.$worker->image)}}" alt="Image"></td>
                    <td>{{$worker->age}}</</td>
                    <td>{{$worker->nationality}}</</td>
                    <td>{{$worker->phone}}</</td>
                    <td>{{$worker->status}}</</td>
                    <td>{{$worker->service_name}}</</td>
                    
                    <td>
                      <form action = "{{route("worker.destroy" , $worker->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("worker.edit" , $worker->id )}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <a href="{{route("worker.create")}}">
                <button type="button" class="btn btn-primary">Add </button>
                    </a>
            </div>
          </div>
        </div>
       
    
@endsection