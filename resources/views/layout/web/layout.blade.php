<!DOCTYPE HTML>
<html>
	<head>
		<title>Tasnim</title>
		<meta charset="utf-8" />
        <link rel="shortcut icon" href="/img/logo/{{env('APP_LOGO')}}.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="/css/page/web.css" />

		<!-- Scripts -->
			<script src="/js/plugin/web/jquery.min.js"></script>
			<script src="/js/plugin/web/jquery.scrollex.min.js"></script>
			<script src="/js/plugin/web/jquery.scrolly.min.js"></script>
			<script src="/js/plugin/web/browser.min.js"></script>
			<script src="/js/plugin/web/breakpoints.min.js"></script>
			<script src="/js/plugin/web/util.js"></script>
			<script src="/js/plugin/web/main.js"></script>

        @yield('head')
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>This is<br />
						TASNIM</h1>
						<p>A fully operational, user friendly pre-school system engineered by <a href="https://twitter.com/ajlkn">WebSoho</a><br> for the usage of parents and teachers from all registered pre-school and kindergarden.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">TASNIM</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="{{(\Route::current()->getName() == 'web')?'active':''}}"><a href="/">Introduction</a></li>
							<li class="{{(\Route::current()->getName() == 'feature')?'active':''}}"><a href="/feature">Features</a></li>
							<li class="{{(\Route::current()->getName() == 'about')?'active':''}}"><a href="/about">About</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

                    @yield('content')

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; TASNIM</li><li>All Rights Reserved</li></ul>
					</div>

			</div>

	</body>
</html>
