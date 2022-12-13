@extends('backend.master')

@section('content')



<form action="{{route('event.create.do.update',$event->id)}}" method="POST" enctype="multipart/form-data">


@method('PUT')

@csrf

<div class="form-group">
  <label for="event_name">Event Name</label>
  <input type="text" name="event_name" class="form-control" id="event_name" placeholder="Enter your event name "
  value="{{$event->event_name}}" name="event_name">
</div> 

<div class="form-group">
  <label for="picture">Picture</label>
  <input type="file" name="picture" class="form-control" id="picture" placeholder="Enter your file"value="{{$event->picture}}" name="picture">
</div>

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" class="form-control" id="description" placeholder="Enter your Description"value="{{$event->description}}" name="description">
</div>

<div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="Enter your Price"value="{{$event->price}}" name="price">
</div>




<button type="submit" class="btn btn-primary">update</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection