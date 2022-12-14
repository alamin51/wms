@extends('frontend.master')
@section('content')
<div class="container">
  <div class="mx-5 px-5">
    <h3 class="text-center mt-4">Booking</h3>

    @if($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
      @endforeach
    @endif
    <form action="{{route('frontend.booking.submit',$package->id)}}" method="post">
      @csrf

      <div class="form-group">
      <label for="guest">Number of Guest/Person</label>
      <input type="number" class="form-control" id="guest" placeholder="Enter your  guest amount" name="guest"  required min='1'>
    </div>

    <div class="form-group">
      <label for="food_item">Food Item</label>
      <input type="text" class="form-control" id="food_item" placeholder="Enter your  Food item if you want for your event" name="food_item" required>
    </div>

    <div class="form-group">
      <label for="venue">Venue</label>
      <input type="text" class="form-control" id="venue" placeholder="Enter your  guest amount" name="venue"  required>
    </div>
   

      <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your  address" name="address" value="{{auth()?->user()?->address}}" required>
    </div>
    <div class="form-group">
      <label for="client_name">From Date</label>
      <input type="date" class="form-control" id="client_name" aria-describedby="client_name" placeholder="Enter your  name" name="from_date">
    </div>

    <div class="form-group">
      <label for="client_phone">To date</label>
      <input type="date" class="form-control" id="client_phone" aria-describedby="client_phone" placeholder="Enter your phone" name="to_date">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Select Services</label>
      <div class="mb-3">
        @foreach ($services as $item)
        <br>
        <a href="{{route('frontend.service.view',$item->id)}}"><small>{{ $item->service_name }}</small></a>
        
        <input type="checkbox" name="multipleServices[]" id="" multiple value="{{ $item->id }}">
        @endforeach
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>

@endsection
