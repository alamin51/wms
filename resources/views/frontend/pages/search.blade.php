@extends('frontend.master')

@section('content')

    <div  class="container mt-100">

        <div class="row">
            @if($eventsearch)
                @foreach($eventsearch as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img">
                                    <img style="width:300px;height:400px" src="{{url('/upload/'.$data->picture)}}" alt="">
                                </div>

                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$data->event_name}}</h4>
                            <h4 class="card-title">{{$data->description}}</h4>
                            <p class="text-muted">Price:{{$data->price}}.BDT</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p class="alert alert-danger">No Event Found.</p>
            @endif
        </div>
    </div>

@endsection