@extends('backend.master')

@section('content')



<form  action= "{{route('booking.create.do.update',$booking->id)}}" method="POST">
  @method('PUT')
@csrf

<div class="form-group">
  <label for="user_id">User ID</label>
  <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Enter your User ID"value="{{$booking->user_id}}" name="user_id">
</div> 

<div class="form-group">
  <label for="package_id">Booking Type</label>
  <input type="text" name="package_id" class="form-control" id="package_id" placeholder="Enter your package ID"value="{{$booking->package_id}}" name="package_id">
</div> 

<div class="form-group">
  <label for="booking_from">Booking From</label>
  <input type="date" name="booking_from" class="form-control" id="booking_from" placeholder="Enter your booking From"value="{{$booking->booking_from}}" name="booking_from">
</div>

<div class="form-group">
  <label for="booking_to">Booking To</label>
  <input type="date" name="booking_to" class="form-control" id="booking_to" placeholder="Enter your booking To"value="{{$booking->booking_to}}" name="booking_to">
</div>






<button type="submit" class="btn btn-primary">Update</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection