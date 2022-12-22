@extends('backend.master')

@section('content')



<form action="{{route('package.create.table.store')}}" method="POST" enctype="multipart/form-data">

@csrf
<h2>Package Form</h2>
<div class="form-group">
  <label for="name">package Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
</div> 

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" class="form-control" id="description" placeholder="Enter your description">
</div>

<div class="form-group">
  <label for="service_id">Service ID</label>
  <input type="text" name="service_id" class="form-control" id="service_id" placeholder="Enter your service id">
</div> 

<div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="Enter your price">
</div>
<div class="form-group">
  <label for="slug">Slug</label>
  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter your slug">
</div>

<div class="form-group">
  <label for="image">Image</label>
  <input type="file" name="image" class="form-control" id="image" placeholder="No file Choosen">
</div>




<button type="submit" class="btn btn-primary">Submit</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection