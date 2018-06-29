


<!doctype html>
<html lang="en">
  <head>

  	@foreach($pages as $page)
  		@if( Request::path() == $page->slug )
  			@php
  				$distinct_page = $page;
  			@endphp
  		@endif
  	@endforeach



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('images/favicon-192x192.png') }}" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon-180x180.png') }}" />


	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans" rel="stylesheet">
	{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet"> --}}
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link type="img/gif" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link type="img/png" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.video.play.png">
    {{-- <link rel="stylesheet" href="http://idangero.us/swiper/dist/css/swiper.min.css"> --}}


	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/wis.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testimonial-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/social-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">   

	<style>
	.about-banner{
		background:url('{!! json_decode($distinct_page->extras)->bp !!}') right no-repeat !important;
		background-size:cover;
	}
	.carousel-description {
		/*border-left: 5px solid #F6BB3D;*/
		border-bottom: 5px solid #F6BB3D;
		width: 100%;
		color: #FFF;
		text-align: center;
		font-size: 15px;
		font-family: 'Lato', sans-serif;
		padding-top: 5px;
		padding-bottom: 5px;
		background-color: rgba(102, 31, 153, 0.8);
		z-index: 1;
		left: 0;
		right: 0;
		bottom: 0;
	}
	
  .card{
  	border-radius: 0px;
  	background-color: #fff;
  	border: 1px solid #e1e1ea;
  }

   .card-body{
	color: #47476b;
	font-size: 15px;
	background-color: #fff;
	font-family: 'Work Sans', sans-serif;
  }
   .card-title{
  	  font-size: 18px;
  	  color: #29293d;
  	  font-weight: normal;
  	  cursor: pointer !important;
  	  font-family: 'Lato', sans-serif;
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
				<h1 class="text-white link-nav">{!! $distinct_page->title !!} Curriculum</h1>
			</div>	
		</div>
	</div>
</section>

	<div class="container mt-3 mb-5">
		<div class="row">
		<div class="col-md-3 widget-wrap">
					<div class="single-sidebar-widget post-category-widget">
					<div class="mb-3">
						<img src="{!! json_decode($distinct_page->extras)->logo !!}" class="img-fluid">
						<div class="mb-3">

							Duration
						</div>
					</div>


						<div class="category-title">Other Curriculum</div>
							<ul class="cat-list">
							@foreach ($menu_items as $menu_item)
							  @if ($menu_item->children)
							    <ul>
							      @foreach ($menu_item->children as $i => $child)
							        @if($child->parent_id==3)
							        <li class="px-2 f-li">
							        	<a class="d-flex justify-content-between" href="{{ $child->url() }}">{{ $child->name }}</a>
							        </li>
							        @endif
							      @endforeach
							    </ul>
							  @endif
							@endforeach
							</ul>
					</div>			
		</div>

	<div class="col-md-9 main-sb card-body">
{{-- 		<h3>Social Skills</h3>
			<hr>
				@foreach($socialskills as $skills)
					<div class="col-lg-12 my-1">
						 <i class="fa fa-check" aria-hidden="true"></i> {!!$skills->skill!!}
					</div>
				@endforeach --}}
			{!! $distinct_page->content!!}


<section class="feature-area p-3" style="background-color: #fff;">
<div id="accordion">
	<div class="card">
	  @foreach($subjects as $subject)
	    <div class="card-header" id="headingOne">
	      <h5 class="mb-0">
	        <button class="btn btn-link" data-toggle="collapse" data-target="#{{$subject->id}}" aria-expanded="true" aria-controls="collapseOne"><span class="card-title text-uppercase"> 
	          {!!$subject->name!!}</span>
	        </button>	
	      </h5>
	    </div>
	    <div id="{{$subject->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
	      <div class="card-body">
	        {!!$subject->content!!}
	      </div>
	    </div>
	  @endforeach
	  
	</div>
</div>	
</section>





<section class="feature-area p-3" style="background-color: #fff;">
	<div class="container">
		<h3 align="center" class="mb-4">TEACHERS</h3>
		<div id="owl-carousel" class="owl-carousel owl-theme d-flex wow fadeIn" data-wow-duration="1s">
			@foreach($teachers as $teacher)
		  		<div class="item" style="position: relative;">
		  			<img src="{{$teacher->image}}">
		  			<div class="carousel-description">
		  				<p class="mb-0">{{ $teacher->name }}</p>
		  				<small class="mb-0">{{ $teacher->position }}</small>
		  			</div>
		  		</div>
		    @endforeach
		</div>
		
	</div>
</section>			



	</div>	


	</div>
	</div>
	</div>





<section class="contactUs px-sm-5 py-sm-5" style="background-image: url({{ asset('images/wis1-1.jpg') }}); background-size: cover; border-top: 5px solid #F6BB3D; color: #9B999A">
	<div class="row">
		
		<div class="col-md-8 mx-auto contact-form">
			<h3 class="text-center font-weight-bolder">CONTACT US</h3>

			<form class="needs-validation mt-5" novalidate>

				<div class="form-row">
					<div class="col">
						<label for="">First Name</label>
						<input type="text" class="form-control" placeholder="First name">
					</div>

					<div class="col">
						<label for="">Last Name</label>
						<input type="text" class="form-control" placeholder="Last name">
					</div>
				</div>

				<div class="form-row mt-2">
					<div class="col">

						<label for="">Email</label>
						<input type="email" class="form-control" placeholder="Email">
					</div>
					<div class="col">

						<label for="">Phone Number</label>
						<input type="text" class="form-control" placeholder="Phone Number">
					</div>
				</div>
				 

				<div class="form-row mt-2">
					<div class="col">
						<label for="">Message</label>
						<textarea class="form-control" placeholder="Message" rows="3"></textarea>
					</div>
				</div>
				
				<button class="btn btn-primary mt-4" type="submit">Submit</button>
			</form>
		</div>

		<div class="col-md-3 address">
			<img width="250" src="{{ asset('images/logo.png') }}" alt="">
			<br><br>
			<div class="d-inline-block">
				<div class="d-inline-block">
					<p style="color: #ECE7D8; font-size: 12px;">
						Fil-Am Hi-Way Friendship <br>
						Angeles City, Pampanga
							<br><br>
						Commitment To Excellence
							<br><br>
						Cambridge International Accredited 
					</p>
					<p class="mb-0" style="color: #ECE7D8;" >
						<i class="fas fa-phone"></i>&nbsp;
						<span style="font-size: 13px;">045-123-4567</span>
					</p>
					<p class="mb-0" style="color: #ECE7D8;" >
						<i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;  
						<span style="font-size: 13px;">09171234567</span>
					</p>
					<p style="color: #ECE7D8;" >
						<i class="fas fa-envelope"></i>&nbsp;  
						<span style="font-size: 13px;">registrar@westfields.edu.ph</span>
					</p>
				</div>
			</div>
		</div>
	
	</div>

	
</section>

<footer class="footer-section py-4" style="background-color: #661F99;">
	<div class="container">
		<div class="d-flex flex-wrap flex-row justify-content-between">
			
			<div class="social-links">
				<nav class="nav">
					    <div class="social__item">
					            <a target="_blank" href="https://facebook.com" class="social__icon--facebook"><i class="icon--facebook"></i></a>
					    </div>
						<div class="social__item">
					            <a target="_blank" href="https://twitter.com/matchboxhero10" class="social__icon--twitter"><i class="icon--twitter"></i></a>
					    </div>
					    <div class="social__item">
					            <a target="_blank" href="https://twitter.com/matchboxhero10" class="social__icon--youtube"><i class="fab fa-youtube"></i></a>
					    </div>
				</nav>
			</div>
			<div class="col mt-3">
				<small class="text-center d-block mx-auto text-white font-weight-bold">
					© 2018 westfields.edu.ph
				</small>
			</div>
		
		</div>
	</div>
</footer>
</div>




{{-- 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/swipe/2.0.0/swipe.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	{{-- <script src="{{ asset('js/owl.carousel.min.js') }}"></script> --}}
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- <script src="{{ asset('js/owl.js') }}"></script>  --}}
    {{-- <script src="{{ asset('js/main.js') }}"></script>  --}}


	<script>
		function checkWindow () {
			if( $(window).width() <= 992 ) {
				$('.transformative').addClass('mobile-view');
			} else {
				$('.transformative').removeClass('mobile-view');
			}
		}

		$('#owl-carousel').owlCarousel({
		    loop:true,
		    margin:20,
		    autoplay: true,
		    autoplayHoverPause: true,
		    dots: false,
		    smartSpeed: 1000,
		    slideTransition: 'linear'
		    // nav:true,
		    // responsive:{
		    //     0:{
		    //         items:1
		    //     },
		    //     600:{
		    //         items:3
		    //     },
		    //     1000:{
		    //         items:5
		    //     }
		    // }
		})

		$(window).resize(checkWindow);
		$(document).ready(checkWindow);

		// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		// 	$('#buttons a ').css({
		// 		'opacity': 1
		// 	});
		// }

	</script>


	{{-- <script src="{{ asset('js/testimonial-slider.js') }}"></script> --}}

	<script>
		window.mySwipe = new Swipe(document.getElementById('slider'), {
		  startSlide: 0,
		  speed: 400,
		  auto: 5000,
		  continuous: true,
		  disableScroll: false,
		  stopPropagation: false,
		  // callback: function(index, elem) {},
		  // transitionEnd: function(index, elem) {}
		});

		$('.btn-next').on('click', function () {
			window.mySwipe.next();
		})
		$('.btn-prev').on('click', function () {
			window.mySwipe.prev();
		})
	</script>
</body>
</html>