@extends('backend.master')

@section('content')


<h1>Create Service Form</h1>

<form action="{{route('service.create.table.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
  <label for="service_name">Service Name</label>
  <input type="text" name="service_name" class="form-control" id="service_name" placeholder="Enter your service name ">
</div> 

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" class="form-control" id="description" placeholder="Enter your service description ">
</div> 

<div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="Enter your price">
</div> 




<button type="submit" class="btn btn-primary">Submit</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection