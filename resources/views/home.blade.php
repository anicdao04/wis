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

    <title>WIS</title>
  </head>
  <body>
<div class="main-body">

<section class="wrapper-header">
	@include('partials.navbar')
</section>

<section class="banner-section" style="background-image: url({{ asset('images/slider/img5-large.jpg') }});">
	{{-- <picture>
		<source media="(max-width: 799px)" srcset="{{ asset('images/slider/1.jpg') }}">
		<source media="(max-width: 800px)" srcset="{{ asset('images/slider/img5-large.jpg') }}">
		<img src="{{ asset('images/slider/img5-large.jpg') }}" class="img-fluid" alt="banner-image">
	</picture> --}}


	<div class="info">
		<div class="inner">

				<div id='slider' class='swipe'>
				  <div class='swipe-wrap'>
				  	@foreach($reviews as $review)
				    <div>
						<h3>{{$review->name}}</h3>
						<p>{{$review->content}}</p>
				    </div>
				    @endforeach
				  </div>
				</div>

		</div>
		<div class="buttons">
			<button class="btn-prev">&larr;</button>
			<button class="btn-next">&rarr;</button>
		</div>
	</div>
	

</section>


<section class="common-links" style="background-color: #E4EEF2;">
	<div class="row">

		<div class="col-md-10 mx-auto p-0">
			<div class="owl-carousel owl-theme pt-sm-3">
				@foreach($popularlinks as $popularlink)
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x {{$popularlink->icon}}"></i><br><br>
						{{$popularlink->name}}
					</a>
			    </div>
			    @endforeach
			</div>
			
		</div>
	</div>
</section>

<section class="news-and-event-section py-0 py-sm-2 px-md-5 " style="background-image: url({{ asset('images/MUN-Slider.jpg')  }}); ">
		<h4 class="text-center font-weight-bolder mb-4 text-white pt-3 pt-sm-4 pt-md-5">News and Events</h4>
		{{-- <div class="seperator-line seperator-middle mb-5 mb-sm-3 mt-sm-2 mt-4"></div> --}}
		<div class="d-inline-flex justify-content-around pb-5 flex-wrap flex-md-nowrap">	
			@foreach($articles as $article)	
			<div class="card shadow-lg mx-sm-1 mx-sm-3 mx-lg-5 rounded-0">
				<img class="card-img-top rounded-0" src="{!!$article->cover_img!!}" style="max-width:350px;" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">{{$article->title}}</h5>
					<p class="card-text">{{str_limit(strip_tags($article->content), $limit=150, $end='..')}}</p>
					<a href="#" class="btn rounded-0 btn-read-more float-right">Read More</a>
					<p class="card-text"><small class="text-muted">{{$article->updated_at->diffForHumans()}}</small></p>
				</div>
			</div>
			@endforeach
		</div>
</section>

<section id="testim" class="testim">
{{-- 	<div class="container pt-5">
		<div class="row d-flex flex-wrap justify-content-between">
			 --}}
<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                	@for($i = 0; $i < count($feedbacks); $i++)
                    	<li class="dot active"></li>
                    @endfor
                </ul>

                <div id="testim-content" class="cont">
                    @foreach($feedbacks as $feedback)
	                    <div class="active">
	                        <div class="img">
	                        	<img src="{!!$feedback->image!!}">
	                        </div>
	                        <h2>{{ $feedback->name }}</h2>
	                        <p>{!!$feedback->content!!}</p>                    
	                    </div>
                    @endforeach
                </div>

            </div>
<!--         </div> -->


			{{-- 
		</div>
	</div> --}}
</section>

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


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	<script>
					
			$('.owl-carousel').owlCarousel({
			    loop:false,
			    margin: 5,
			    nav:false,
			    responsive:{
			        0:{
			            items: 3
			        },
			        600: {
			            items: 4
			        },
			        1000: {
			        	items: 6
			        },
			        1200: {
			            items: 7
			        }
			    }
			})

	</script>

	<script>
		function checkWindow () {
			if( $(window).width() <= 992 ) {
				$('.transformative').addClass('mobile-view');
			} else {
				$('.transformative').removeClass('mobile-view');
			}
		}

		$(window).resize(checkWindow);
		$(document).ready(checkWindow);

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('#buttons a ').css({
				'opacity': 1
			});
		}

	</script>

	<script src="{{ asset('js/testimonial-slider.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/swipe/2.0.0/swipe.js"></script>

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