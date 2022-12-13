@extends('backend.master')

@section('content')



<form action="{{route('payment.create.table.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
  <label for="payment_date">Payment Date</label>
  <input type="date" name="payment_date" class="form-control" id="payment_date" placeholder="Enter your payment date">
</div> 

<div class="form-group">
  <label for="amount">Amount</label>
  <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter your amount">
</div>


<button type="submit" class="btn btn-primary">Submit</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection