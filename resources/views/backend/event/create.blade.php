@extends('backend.master')

@section('content')


<h1>Create Event Form</h1>

<form action="{{route('event.create.table.store')}}" method="POST" enctype="multipart/form-data">

@csrf


<div class="form-group">
  <label for="event_name">Event Name</label>
  <input type="text" name="event_name" class="form-control" id="event_name" placeholder="Enter your event name ">
</div> 

<div class="form-group">
  <label for="package_name">Package Name</label>
  <select name="package_name" id="package_name" class="form-control">

  @foreach($packages as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
  </select>
</div> 
<div class="form-group">
  <label for="picture">Picture</label>
  <input type="file" name="picture" class="form-control" id="picture" placeholder="Enter your file">
</div>

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div>

<div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="Enter your Price">
</div>




<button type="submit" class="btn btn-primary">Submit</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection