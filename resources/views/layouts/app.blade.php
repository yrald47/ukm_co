<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link rel="stylesheet" href="{{asset('polo/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('polo/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('polo/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('polo/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('polo/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('polo/css/style.css')}}">

	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">

	<!-- ****************************** Preloader ************************** -->

	<div id="preloader"></div>

	<!-- ****************************** Sidebar ************************** -->

	<nav id="sidebar-wrapper">
		<a id="menu-close" href="#" class="close-btn toggle"><i class="ion-ios-close-empty"></i></a>
	    <ul class="sidebar-nav">
		    <li><a href="#home">Home</a></li>
			<li><a href="#features">Features</a></li>
			<li><a href="#gallery">Gallery</a></li>
			<li><a href="#team">Development Team</a></li>
			<li><a href="#testimonial">Precious Reviews</a></li>
			<li><a href="#contact">Contact us</a></li>
	    </ul>
	</nav>

	<!-- ****************************** Header ************************** -->

	<header class="sticky" id="header">
		<section class="container">
			<section class="row" id="logo_menu">
				<section class="col-xs-8"><a class="logo" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></section>
				<section class="col-xs-4">
					<a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s">
						@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						<i class="ion-navicon"></i>
					</a>
				</section>
			</section>
		</section>
	</header>


	<!-- ****************************** Banner ************************** -->
	@yield('content')

		<!-- ****************************** Footer ************************** -->

	<!-- <section id="footer">
		<section class="container">
			<section class="row">
				<div class="col-sm-6">
					<span>Theme By</span>
					<h1 class="footer-logo">
						<a href="https://themewagon.com/">ThemeWagon</a>
					</h1>
				</div>
				<div class="col-sm-6">
					<p class="copyright">All &copy; Copyright Reserved 2014</p>
				</div>
			</section>
		</section>
	</section> -->


	<!-- All the scripts -->

	<script src="{{asset('polo/js/jquery-2.1.3.min.js')}}"></script>
	<script src="{{asset('polo/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('polo/js/wow.min.js')}}"></script>
	<script src="{{asset('polo/js/owl.carousel.js')}}"></script>
	<script src="{{asset('polo/js/script.js')}}"></script>
	
</body>
</html>
