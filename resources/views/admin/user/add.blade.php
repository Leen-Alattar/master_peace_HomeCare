@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add User</h4>
        <p class="card-description">  </p>
        <form action="{{route("user.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="description">User Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="description">User Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <select name="role" class="form-control">
                <option value="none" selected="" disabled="">Select User Role</option>
                <option value="0">User </option>
                <option value="1">Admin</option>
            </select>
          </div>
       
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection