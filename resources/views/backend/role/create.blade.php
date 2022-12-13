@extends('backend.master')

@section('content')


<h1>Create Role Form</h1>
<form action="{{route('role.create.table.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
  <div class="form-group">
    <label for="name">Role Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
  </div> 
  <div class="form-group">
    <label for="name">Description</label>
    <input type="text" name="description" class="form-control" id="description" placeholder="Enter your description">
  </div> 



  <button type="submit" class="btn btn-success">Submit</button>
 
 
  <!-- <div class="form-group">
    <label for="description">Description</label>
    <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
  </div> -->
</form>

@endsection