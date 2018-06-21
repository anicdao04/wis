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

	<link rel="stylesheet" href="{{ asset('css/wis.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testimonial-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/social-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <title>WIS</title>

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

  .card-header{
  	  padding: 5px;
  	  border-radius: 0px;
  }
  .card{
  	border-radius: 0px;
  	background-color: #c3c3e5;
  	border: 1px solid #f0f0f5;
  }
  .card-body{
	color: #33334d;
	font-size: 16px;
	letter-spacing: .5px;
	word-spacing: .8px;
  }

  .card-title{
  	  font-size: 18px;
  	  color: #fff;
  	  font-weight: bold;
  	  cursor: pointer !important;
  	  font-family: 'Roboto';
  }
  .btn-link{
  	cursor: pointer !important;
  	text-decoration: none !important;
  }
  .card-body{
  	background-color: #fff;
  }

  </style>

  </head>
  <body>
<div class="main-body">

<section class="wrapper-header">
	@include('partials.navbar')
</section>


<section class="banner-section" style="background-image: url({{ asset('images/slider/img5-large.jpg') }});">
</section>

<section class="container pt-5">
	<div class="row pb-5">
<div class="col-lg-8 col-md-8">
	
	<div id="carouselSlider" class="carousel slide mb-3" data-ride="carousel">
		  <div class="carousel-inner">
				@foreach($historybanners as $key => $carousel)
					<div class="carousel-item {{$key ==0? 'active': ''}}">
						<img src="{{$carousel->image}}">
					</div>
				@endforeach
		  </div>

		  <a class="carousel-control-prev" href="#carouselSlider" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>	

{{-- 	<dl class="accordion">
		@foreach($aboutcontents as $content)
	    <dt>
	        <a href="">{{$content->category}}</a>
	    </dt>
	    <dd>
	        {!!$content->content!!}
	    </dd>
	    @endforeach
	</dl>
 --}}


<div id="accordion">
  <div class="card">
  @foreach($aboutcontents as $key => $content)
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#{{$content->id}}" aria-expanded="true" aria-controls="collapseOne"><span class="card-title text-uppercase"> 
          {!!$content->category!!}</span>
        </button>	
      </h5>
    </div>
    <div id="{{$content->id}}" class="collapse {{$key ==0? 'show': ''}}" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        {!!$content->content!!}
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>

		<div class="col-lg-4 col-md-4 widget-wrap">

				<div class="single-sidebar-widget post-category-widget">

					<h4 class="category-title mt-20 mb-20">News</h4>
						<ul class="cat-list">
							@foreach($articles as $art)
								<div class="row my-3
								">
								<div class="thumb col-md-4">
									<a href="../article/{{$art->id}}"><img class="img-fluid" src="{{asset($art->image)}}" alt=""></a>
								</div>
								<div class="details col-md-8">
									<a href="{{$art->id}}"><h6>{{$art->title}}</h6></a>
									<p class="time"><span class="lnr lnr-calendar-full n-ico"></span> {{$art->updated_at->diffForHumans()}}</p>
								</div>
							</div>
							@endforeach
						</ul>

					<h4 class="category-title mt-20 mb-20">Location</h4>
						<ul>
							<li>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.465850286168!2d120.56757481440418!3d15.132739789465342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f2ff76e7d4db%3A0xee15af6b87bebe30!2sWestfields+International+School!5e0!3m2!1sfil!2sph!4v1529550932813" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</li>
						</ul>

					<h4 class="category-title mt-20 mb-20">Contact Us</h4>
						@foreach($contacts as $contact)
						<div class="row mb-2" style="color: #52527a;">
							<div class="col-md-1"></div>
							<div class="col-md-10"><li class="fa {!!$contact->icon!!}"></li> {{$contact->content}}</div>
						</div>
						@endforeach
				</div>	
		</div>




	</div>
</section>


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