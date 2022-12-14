@extends('frontend.master')
@section('content')
<div class="container">
    <div class="container">
        <div class="container">
            <table class="table">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Booking Id</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookingDetails as $key=>$data)
                    <tr>
                        <td>{{$key + 1 }}</td>
                        <td> {{$data->service_name}}</td>
                        <td> {{$data->booking_id}}</td>
                        <td> {{$data->package_price}} BDT</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
