@extends('backend.master')

@section('content')


<h1>Payment List</h1>
<a class="btn btn-success" href="{{route('payment.create')}}">Create Payment List</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">payment_date</th>
      <th scope="col">amount</th>

    </tr>
  </thead>
  <tbody>
    @foreach($payments as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->payment_date}}</td>
      <td>{{$data->amount}}</td>
     
    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection