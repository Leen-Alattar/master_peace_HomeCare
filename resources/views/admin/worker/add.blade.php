@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Worker</h4>
        <p class="card-description">  </p>

        <form action="{{route("worker.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Worker Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="name">Worker image</label>
            <input type="file" class="form-control" name="image">
          </div>
          <div class="form-group">
            <label for="description">Worker Age</label>
            <input type="textarea" class="form-control" name="age">
          </div>
          
            <div class=" form-group ">
                <label>Worker Phone</label>
                <input type="phone" name="phone" class="form-control">
              </div>
              <div class=" form-group ">
                <label>nationality</label>
                <input type="text" name="nationality" class="form-control">
              </div>
            
          
          <div class="row">
            <div class="col-sm form-group ">
                <label>Services</label>
                <select name="service_id" class="form-control">
                    <option value="none" selected="" disabled="">Select Service</option>
                    @foreach ($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
               
               
              </div>
              <div class="col-sm form-group ">
                <label>status</label>
                <select class="form-control" aria-label="Default select example" name="status">
                    <option selected value="1" >Available</option>
                    <option value="0">Unavailable</option>
                  </select>
              </div>
          </div>

          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection