<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Madrasah</title>
	<!-- Meta End-->

	<!-- Styles -->
	<link rel="shortcut icon" href="/img/logo/{{env('APP_LOGO')}}.png"/>
	<link href="/css/plugin/bootstrapmdb.min.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
	<link href="/css/plugin/fontawesome.min.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
	<link href="/css/plugin/mdb.min.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
	<link href="/css/page/admin.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
	<link href="/css/page/responsive.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
	<!-- Styles end -->

	<!-- Script -->
	<script type="text/javascript" src="/js/plugin/jquery-3.4.1.min.js{{ config('app.link_version') }}"></script>
	<script src="/js/plugin/popper.min.js{{ config('app.link_version') }}"></script>
	<script type="text/javascript" src="/js/plugin/bootstrapmdb.min.js{{ config('app.link_version') }}"></script>
	<script type="text/javascript" src="/js/plugin/mdb.min.js{{ config('app.link_version') }}"></script>
	<script type="text/javascript" src="/js/page/admin.js{{ config('app.link_version') }}"></script>
	<!-- Script End -->

	@yield('head')

</head>
<body>
	<!--Main Navigation-->
	<header>

		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

			<div class="container">

				<!-- Navbar brand -->
				<img class="logo-img" src="/img/logo/tasnim-small.png" />
				<a class="navbar-brand" href="#">Madrasah</a>

				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="basicExampleNav">

				<!-- Links -->
				<ul class="navbar-nav ml-auto smooth-scroll">
					<li class="nav-item">
						<a class="nav-link" href="/">E-Waris</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/login">E-Staff</a>
					</li>

					<li class="nav-item">
						<a href="/register?status=luar" class="nav-link" href="#best-features">Pendaftaran Murid Luar</a>
					</li>

					<li class="nav-item">
						<a href="/register?status=asrama" class="nav-link" href="#best-features">Pendaftaran Murid Berasrama</a>
					</li>
				</ul>
				<!-- Links -->

			</div>
			<!-- Collapsible content -->

		</div>

	</nav>
	<!--/.Navbar-->

	<!--Mask-->
	<div id="intro" class="view">

		<div class="mask">

			<div class="container-fluid d-flex align-items-center justify-content-center h-100">

				<div class="row d-flex justify-content-center text-center">

					<div class="col-md-10 login-form">

						<!-- Heading -->
						<h2 class="display-4 font-weight-bold white-text pt-5 mb-2">E-WARIS</h2>

						<!-- Divider -->
						<hr class="hr-light">
						<form action="/public/search" method="GET">
						@csrf
							<!-- Material input -->
							<div class="md-form">
								<input type="text" name="nric" class="form-control mb-3" placeholder="Masukkan No Kad Pengenalan">
							</div>
	
	
							<input type="submit" class="btn btn-outline-white btn-login mb-5" value='Log In'>
							

						</form>



					</div>

				</div>

			</div>

		</div>

	</div>
	<!--/.Mask-->

</header>
@if (Session::has('success'))
swal('',@json(Session::get('success')),'success');
@endif
@if (Session::has('err'))
swal('',@json(Session::get('err')),'warning');
@endif

</body>
</html>
