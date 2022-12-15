@extends('frontend.master')
@section('content')

<div class="fh5co-loader"></div>

<div id="page">
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url('/frontend/images/tareef-01.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Wedding Management System</h1>
							<h2>Be Happy with lots of Blessing.. </h2>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<p>Welcome</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{('/frontend/images/groom.jpg')}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Nabil</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{('/frontend/images/bride.jpg')}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Sathi</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Our service</span>
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
