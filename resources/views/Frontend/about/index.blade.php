@extends('Frontend.public.app')

@section('main-content')
<!-- Start Page Title Area -->
<section class="page-title-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>درباره ما</h2>
			</div>
		</div>
	</div>

	<div class="shape1"><img src="{{asset('Frontend/assets/img/shape1.png') }}" alt="img"></div>
	<div class="shape2"><img src="{{asset('Frontend/assets/img/shape2.png') }}" alt="img"></div>
	<div class="shape3"><img src="{{asset('Frontend/assets/img/shape3.png') }}" alt="img"></div>
	<div class="shape6"><img src="{{asset('Frontend/assets/img/shape6.png') }}" alt="img"></div>
	<div class="shape8 rotateme"><img src="{{asset('Frontend/assets/img/shape8.svg') }}" alt="shape"></div>
	<div class="shape9"><img src="{{asset('Frontend/assets/img/shape9.svg') }}" alt="shape"></div>

	<!-- Bubble Animte -->
	<div class="bubble-animate">
		<div class="circle small square1"></div>
		<div class="circle small square2"></div>
		<div class="circle small square3"></div>
		<div class="circle small square4"></div>
		<div class="circle small square5"></div>
		<div class="circle medium square1"></div>
		<div class="circle medium square2"></div>
		<div class="circle medium square3"></div>
		<div class="circle medium square4"></div>
		<div class="circle medium square5"></div>
		<div class="circle large square1"></div>
		<div class="circle large square2"></div>
		<div class="circle large square3"></div>
		<div class="circle large square4"></div>
	</div>
</section>
<!-- End Page Title Area -->



@include('Frontend.Partials._about_us')
@include('Frontend.Partials._team_us')

<!-- Start CTA Area -->
<div class="cta-area">
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col-lg-7 col-md-7">
				</div>
				<div class="col-lg-5 col-md-5 text-right">
					</div>
				</div>
			</div>
		</div>
		<!-- End CTA Area -->
		
		
@include('Frontend.Partials._tellabout')

@endsection

@section("FooterSection")

<!-- Map API JS FILES -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&amp;callback=initMap"></script>
<!-- Crake JS FILE -->
<script src="{{ asset('Frontend/js/crake-map.js') }}"></script>
@endsection