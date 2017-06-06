<!DOCTYPE html>
<!--<html lang="en"> -->
<html lang="{{ config('app.locale') }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ISYRES (Information Systems Research Service)</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
  
	<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('cardio/img/favicons/apple-touch-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('cardio/img/favicons/apple-touch-icon-60x60.png') }}">
	<link rel="icon" type="image/png" href="{{ URL::asset('cardio/img/favicons/favicon-32x32.png') }}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{ URL::asset('cardio/img/favicons/favicon-16x16.png') }}" sizes="16x16">
	<link rel="manifest" href="{{ URL::asset('cardio/img/favicons/manifest.json') }}">
	<link rel="shortcut icon" href="{{ URL::asset('cardio/img/favicons/favicon.ico') }}">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="{{ URL::asset('cardio/img/favicons/browserconfig.xml') }}">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/css/normalize.css') }}">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/css/bootstrap.css') }}">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/css/owl.css') }}">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/css/animate.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/fonts/eleganticons/et-icons.css') }}">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('cardio/css/cardio.css') }}">
</head>

<body>
     <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
			-->

	<div class="preloader">
		<img src="{{ URL::asset('cardio/img/loader.gif') }}" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="{{ URL::asset('cardio/img/logo.png') }}" data-active-url="{{ URL::asset('cardio/img/logo-active.png')}}" alt=""></a> <span class="h1"> <a href="/">ISYRES (Information Systems Research Service)</a></li> </span>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					{{-- <li><a href="{{ url('/register') }}" class="btn btn-blue">Sign Up</a></li> --}}
					<a href="{{ url('/login') }}" class="btn btn-blue">Sign In</a>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Research Made Your Life Better.</h3>
							<h1 class="white typed">Keep Survey Anything, It Will Be A Journey In Your Life.</h1>
              
							<span class="typed-cursor">|</span>
              
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Time's Services</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Morning</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Noon</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13:30 - 15:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Out Of Service</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">16:30</h5>
									</div>
								</div>
							</div>
							{{-- <div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div> 
							</div>--}}
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Not yet Membership? </br>Let's join us and explore the world!</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Register Today</h4>
							<h4 class="white heading small-pt">Let's Survey</h4>
							<a href="{{route('register')}}" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Quotes</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">Ever you never do it properly, just do it everyday!</h4>
								<h5 class="white heading light author">D.K Yoo</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Always there are solutions for your problems, if not that's not problem!</h4>
								<h5 class="white heading light author">Anonymous</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Credibility someone look on what they did!</h4>
								<h5 class="white heading light author">Anonymous</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- <section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class="light muted">Achieve the best results with our wide variety of training options!</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
            
							<img src="{{ URL::asset('cardio/img/icons/heart-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Cardio Training</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ URL::asset('cardio/img/icons/guru-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Yoga Pilates</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ URL::asset('cardio/img/icons/weight-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Power Training</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section> --}}
	
	
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Badan Pusat Statistik </h3>
					
					<h5 class="light regular light-white">Jl. Pattimura, Pekanbaru, Provinsi Riau.</h5>
					<a href="{{route('register')}}" class="btn btn-blue ripple trial-button">Join Member</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">07:00 - 15:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">Out Of Service</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2017 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://riau.bps.go.id">BPS</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="{{ URL::asset('cardio/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ URL::asset('cardio/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('cardio/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('cardio/js/wow.min.js') }}"></script>
	<script src="{{ URL::asset('cardio/js/typewriter.js') }}"></script>
	<script src="{{ URL::asset('cardio/js/jquery.onepagenav.js') }}"></script>
	<script src="{{ URL::asset('cardio/js/main.js') }}"></script>
</body>

</html>
