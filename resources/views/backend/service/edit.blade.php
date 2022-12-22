@extends('backend.master')

@section('content')



<form action="{{route('service.create.do.update',$service->id)}}" method="POST" enctype="multipart/form-data">

@method('PUT')
@csrf

<div class="form-group">
  <label for="service_name">Service Name</label>
  <input type="text" name="service_name" class="form-control" id="service_name" placeholder="Enter your service name " value="{{$service->service_name}}" name="service_name">
</div> 

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" class="form-control" id="description" placeholder="Enter your service description" value="{{$service->description}}" name="description">
</div> 

<div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="Enter your price" value="{{$service->price}}" name="price">
</div> 

<div class="form-group">
  <label for="image">Image</label>
  <input type="file" name="image" class="form-control" id="image" placeholder="Enter your image" value="{{$service->image}}" name="image">
</div> 




<button type="submit" class="btn btn-primary">Update</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection