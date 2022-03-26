@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add User</h4>
        <p class="card-description">  </p>
        <form action="{{route("user.update" , $userEdit->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" name="name" value="{{$userEdit->name}}">
          </div>
          <div class="form-group">
            <label for="description">User Email</label>
            <input type="email" class="form-control" name="email" value="{{$userEdit->email}}">
          </div>
          <div class="form-group">
            <label for="description">User Password</label>
            <input type="password" class="form-control" name="password" value="{{$userEdit->password}}">
          </div>
          <div class="form-group">
            <select name="role" class="form-control">
                <option value="{{$userEdit->role}}" selected="" disabled="">Select User Role</option>
                <option value="0">User </option>
                <option value="1">Admin</option>
            </select>
          </div>
       
          <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
        </form>
      </div>
    </div>
  </div>
    
@endsection