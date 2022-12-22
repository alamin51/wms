
@extends('frontend.master')

@section('content')



<div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span></span>
                    <h2>Wedding Services</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-gallery-list">

                    @foreach($servicebook as $data)

                        <li class="one-forth animate-box" data-animate-effect="fadeIn">
                            <a href="#">
                                <img style="height:400px; width:300px;" src="{{url('/upload/',$data->image)}}"
                                    alt="">
                            </a>
                            <div class="case-studies-summary">
                                <h2>{{$data->service_name}}</h2>
                                <p>{{$data->description}}</p>
                                <p>Price: {{$data->price}} (BDT)</p>
                                <a href="{{route('frontend.service.view',$data->id)}}" class="btn btn-primary mybtn" style="display:flex;height:6px;background:green;border:none;overflow:hidden;text-align:center;justify-content:center;align-items:center;">View Details</a>

                            </div>
                        </li>
                        @endforeach

                     
                    </ul>

                </div>
            </div>
        </div>





        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
@endsection
