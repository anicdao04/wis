<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('images/favicon-192x192.png') }}" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon-180x180.png') }}" />


	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">

    <!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    {{-- <link rel="stylesheet" href="http://idangero.us/swiper/dist/css/swiper.min.css"> --}}


	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/wis.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testimonial-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/social-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

	<style>
	.about-banner{
		background:url('{!! json_decode($page[0]->extras)->bp !!}') right no-repeat !important;
		background-size:cover;
	}
	</style>


    <title>WIS</title>
  </head>
  <body>
<div class="main-body">

<section class="wrapper-header">
	@include('partials.navbar')
</section>

<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">

			</div>	
		</div>
	</div>
</section>



</div>
</body>
</html>