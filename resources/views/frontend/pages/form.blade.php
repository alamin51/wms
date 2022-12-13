@extends('frontend.master')
@section('content')
<h3>For Booking</h3>
<form action="{{route('frontend.booking.submit',$package->id)}}" method="post">
    @csrf

    
  <div class="form-group">
    <label for="client_name">From Date</label>
    <input type="date" class="form-control" id="client_name" aria-describedby="client_name" placeholder="Enter your  name" name="from_date">
  </div>
  
  <div class="form-group">
    <label for="client_phone">To date</label>
    <input type="date" class="form-control" id="client_phone" aria-describedby="client_phone" placeholder="Enter your phone" name="to_date">
  </div>


 
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection