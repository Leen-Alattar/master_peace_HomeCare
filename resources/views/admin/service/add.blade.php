@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Service</h4>
        <p class="card-description">  </p>
    


        <form action="{{route("service.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Service Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="description">Service Description</label>
            <input type="textarea" class="form-control" name="description">
          </div>
          <div class="form-group ">
            <label>service Image</label>
            <input type="file" name="image" class="form-control">
          </div>
          
            <div class=" form-group ">
                <label>price_per_hour</label>
                <input type="text" name="price_per_hour" class="form-control">
              </div>
            
          
          <div class="row">
            <div class="col-sm form-group ">
                <label>min_hour</label>
                <input type="text" name="min_hour" class="form-control">
              </div>
              <div class="col-sm form-group ">
                <label>max_hour</label>
                <input type="text" name="max_hour" class="form-control">
              </div>
          </div>

          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection