@extends('backend.master')

@section('content')


<h1>Booking List </h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">user_id</th>
      <th scope="col">package_id</th>
      <th scope="col">booking_from</th>
      <th scope="col">booking_to</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($bookings as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user_id}}</td>
      <td>{{$data->package_id}}</td>
      <td>{{$data->booking_from}}</td>
      <td>{{$data->booking_to}}</td>
      <td>{{$data->status}}</td>
      <td>
      
      <a href="{{route('booking.approve',$data->id)}}" class="btn btn-success">Approve</a>
      <a href="{{route('booking.reject',$data->id)}}" class="btn btn-danger"> Reject</a>
      </td>
      
    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection