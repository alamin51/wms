@extends('frontend.master')

@section('content')

    <div  class="container mt-100">

        <div class="row">
           

            
            @if($servicesearch)
                @foreach($servicesearch as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img">
                                    <img style="width:300px;height:400px" src="{{url('/upload/'.$data->image)}}" alt="">
                                </div>

                            </div>
                        </a>
                        <div> 
                            <h4 class="card-title">{{$data->service_name}}</h4>
                            <h4 class="card-title">{{$data->description}}</h4>
                            <p class="text-muted">Price:{{$data->price}}.BDT</p>
                            <a class="btn btn-outline-primary btn-sm" href="#" data-abc="true"></a>
                            <a href="{{route('frontend.service.view',$data->id)}}" class="btn btn-primary"style="min-height: 10px !important;">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p class="alert alert-danger">No Search Found.</p>
            @endif
        </div>
    </div>

@endsection