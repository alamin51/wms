@extends('frontend.master')
@section('content')
<div class="container">
  <div class="mx-5 px-5">
    <h3 class="text-center mt-4">Booking</h3>
    <form action="{{route('frontend.booking.submit',$package->id)}}" method="post">
      @csrf
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
        <small>{{ $item->service_name }}</small>
        <input type="checkbox" name="multipleServices[]" id="" multiple value="{{ $item->id }}">
        @endforeach
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>

@endsection
