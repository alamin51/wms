@extends('backend.master')


@section('content')

<div class="container">

  <h3 class="text-center mb-4">Report Form</h3>

  <form action="{{route('report.generate')}}" method="get" enctype="multipart/form-data" class="mb-5">

  

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


    @if($errors->any())
    @foreach ($errors->all() as $error)
        <p class="aler alert-danger">{{ $error }}</p>
    @endforeach
    @endif

    <button type="submit" class="btn btn-primary">Search</button>

  </form>

  <div id="searchResult">
  <h3>Booking Reports- {{date('Y-m-d')}}</h3>
  <h4 class="text-center mb-4">Report List</h4>

 
  <table class="table">
    <thead class="thead-white">
      <tr>
      <th scope="col">user_id</th>
      <th scope="col">package_id</th>
      <th scope="col">booking_from</th>
      <th scope="col">booking_to</th>
      <th scope="col">booking Date</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($searchResult))
    @foreach($searchResult as $data)
      <tr>
      <td>{{$data->user_id}}</td>
      <td>{{$data->package_id}}</td>
      <td>{{$data->booking_from}}</td>
      <td>{{$data->booking_to}}</td>
      <td>{{$data->created_at}}</td>
      </tr>

      @endforeach
      @endif
    </tbody>
  </table>
</div>
<button onclick="printDiv('searchResult')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection