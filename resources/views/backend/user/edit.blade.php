@extends('backend.master')

@section('content')



<form action="{{route('user.create.do.update',$user->id)}}" method="POST" enctype="multipart/form-data">

@method('PUT')

@csrf

<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{$user->name}}" name="name">
</div> 


<div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone"value="{{$user->phone}}" name="phone">
</div> 

<div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"value="{{$user->email}}" name="email">
</div>

<div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address"value="{{$user->address}}" name="address">
</div>


<div class="form-group">
  <label for="picture">Picture</label>
  <input type="file" name="picture" class="form-control" id="picture" placeholder="No file Choosen"value="{{$user->picture}}" name="picture">
</div>




<button type="submit" class="btn btn-primary">Update</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection