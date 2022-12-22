

@extends('frontend.master')
@section('content')



<div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Select your Package</span>
                    <h2>Wedding Packages</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-gallery-list">

                        @foreach($packages as $data)
                        <li class="one-forth animate-box" data-animate-effect="fadeIn">
                            <a href="#">
                                <img style="height:400px; width:300px;" src="{{url('/upload/'.$data->image)}}"
                                    alt="">
                            </a>
                            <div class="case-studies-summary">
                                <h2>{{$data->name}}</h2>
                                <p>{{$data->description}}</p>
                                <p>{{$data->price}}.BDT</p>
                                <a href="{{route('frontend.booking.form',$data->id)}}" class="btn btn-primary"style="min-height: 10px !important;">Booking Now</a>

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