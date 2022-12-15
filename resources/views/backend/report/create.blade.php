@extends('backend.master')


@section('content')

<div class="container">

  <h3 class="text-center mb-4">Report Form</h3>

  <form action="{{route('report.generate')}}" method="POST" enctype="multipart/form-data" class="mb-5">

    @csrf

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="booking_from">Date From</label>
          <input type="date" name="booking_from" class="form-control" id="booking_from" placeholder="Enter your booking date from">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="booking_to">Date To</label>
          <input type="date" name="booking_to" class="form-control" id="booking_to" placeholder="Enter your booking date to">
        </div>
      </div>
    </div>



    <button type="submit" class="btn btn-primary">Search</button>

  </form>

  <h4 class="text-center mb-4">Report List</h4>

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
</div>
@endsection