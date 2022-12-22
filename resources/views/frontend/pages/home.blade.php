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
						<h3>Nadim</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{('/frontend/images/bride.jpg')}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Nodi</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
