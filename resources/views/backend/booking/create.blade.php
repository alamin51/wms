@extends('frontend.master')

@section('content')


<h1>Create Booking Form</h1>

<form  action= "{{route('booking.create.table.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
  <label for="user_id">User ID</label>
  <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Enter your booking type">
</div> 

<div class="form-group">
  <label for="package_id">Package ID</label>
  <input type="text" name="package_id" class="form-control" id="package_id" placeholder="Enter your booking type">
</div> 

<div class="form-group">
  <label for="booking_from">Booking From</label>
  <input type="date" name="booking_from" class="form-control" id="booking_from" placeholder="Enter your booking date from">
</div>

<div class="form-group">
  <label for="booking_to">Booking To</label>
  <input type="date" name="booking_to" class="form-control" id="booking_to" placeholder="Enter your booking date to">
</div>


<button type="submit" class="btn btn-primary">Submit</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection