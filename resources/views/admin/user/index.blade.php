@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Mange Users  </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users table</li>
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
                    <th>User Name </th>
                    <th>User Email</th>
                    <th>User Password</th>
                    <th>User Role</th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>

                    <td><label class="badge badge-success">{{$user->name}}</label></td>
                    <td>{{$user->email}}</</td>
                    <td>{{$user->password}}</</td>
                    <td>{{$user->role}}</</td>
                    <td>
                      <form action = "{{route("user.destroy" , $user->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">Delete</button>
                     </form> </td>
                 <td>
          
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <a href="{{route("user.create")}}">
                <button type="button" class="btn btn-primary">Add </button>
                    </a>
            </div>
          </div>
        </div>
       
    
@endsection