<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Boto | Photography HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/fresco.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/slick.css')}}">
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md-3 order-2 order-sm-1">
				<span class="navber-text">
					<a href="{{ route('login') }}" class=" btn-success">Login</a>
					<a href="{{ route('register') }}" class="btn-success">Register</a>
                </span>
				</div>
				<div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
					<a href="./index.html" class="site-logo">
						<img src="{{ asset('frontend/img/logoo.png')}}">
					</a>
				</div>
				<div class="col-sm-4 col-md-3 order-3 order-sm-3">
					<div class="header__switches">
						<a href="#" class="search-switch"><i class="fa fa-search"></i></a>
						<a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
			<nav class="main__menu">
				<ul class="nav__menu">
					<li><a href="{{url('/')}}" class="menu--active">Home</a></li>
					<li><a href="{{url('/about')}}">About</a></li>
					<li><a href="{{url('/gallery')}}">Gallery</a></li>
					<li><a href="{{url('/bolg')}}">Blog</a>
						<ul class="sub__menu">
							<li><a href="{{url('/bolgtwo')}}">Blog Single</a></li>
						</ul>
					</li>
					<li><a href="{{url('/contact')}}">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- รูปเนื้อหา -->
    @yield('two')

	<!-- สิ้นสุดรูปเนื้อหา -->

	<!-- Footer Section -->
	<footer class="footer__section">
		<div class="container">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>
	</footer>
	<!-- Footer Section end -->

	<!-- Search Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('frontend/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{ asset('frontend/js/slick.min.js')}}"></script>
	<script src="{{ asset('frontend/js/fresco.min.js')}}"></script>
	<script src="{{ asset('frontend/js/main.js')}}"></script>

	</body>
</html>
