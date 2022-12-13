@extends('backend.master')


@section('content')


<h1>Create Report Form</h1>

<form  action= "{{route('report.generate')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
  <label for="booking_from">Date From</label>
  <input type="date" name="booking_from" class="form-control" id="booking_from" placeholder="Enter your booking date from">
</div>

<div class="form-group">
  <label for="booking_to">Date To</label>
  <input type="date" name="booking_to" class="form-control" id="booking_to" placeholder="Enter your booking date to">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>

<h1>Report List</h1>

@if($searchResult)
<table class="table">
  <thead class="thead-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">booking_from</th>
      <th scope="col">booking_to</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($searchResult as $data)
  
    <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->booking_from}}</td>
      <td>{{$data->booking_to}}</td>
      <td>{{$data->status}}</td>
    </tr>

    @endforeach

  </tbody>
</table>
@endif

@endsection


