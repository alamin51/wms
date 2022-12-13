@extends('backend.master')

@section('content')



<form action="{{route('role.create.do.update',$role->id)}}" method="POST" enctype="multipart/form-data">

    @method('PUT')
    @csrf 

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"value="{{$role->name}}" name="name">
  </div> 
  <div class="form-group">
    <label for="name">Description</label>
    <input type="text" name="description" class="form-control" id="description" placeholder="Enter your description"value="{{$role->description}}" name="description">
  </div> 



  <button type="submit" class="btn btn-success">Update</button>
 
 
  <!-- <div class="form-group">
    <label for="description">Description</label>
    <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
  </div> -->
</form>

@endsection