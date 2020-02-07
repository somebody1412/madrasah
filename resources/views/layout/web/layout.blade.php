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
						Madrasah</h1>
						<p>A fully operational, user friendly pre-school system engineered by <a target="_blank" href="https://webforsoho.com/">WebForSOHO</a><br> for the usage of parents and teachers from all registered pre-school.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Madrasah</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="{{(\Route::current()->getName() == 'web')?'active':''}}"><a href="/">Introduction</a></li>
							<li class="{{(\Route::current()->getName() == 'feature')?'active':''}}"><a href="/feature">Services</a></li>
							<li class="{{(\Route::current()->getName() == 'elearning')?'active':''}}"><a href="/elearning">e-Learning</a></li>
							<li class="{{(\Route::current()->getName() == 'register')?'active':''}}"><a href="/register">Registration</a></li>
						</ul>
						<ul class="icons">
                            <li><a target="" href="/login" class="icon solid fa-user-circle"><span class="label">Linked In</span></a></li>
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
								<p>2.4 , Kompleks Perniagaan MARA, Jln Stesyen Off Jln Langgar, 05150 Alor Setar, Kedah, Malaysia.</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a target="_blank" href="#">+ (60) 18-376-1700</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a target="_blank" href="mailto:support@webforsoho.com">support@webforsoho.com</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a target="_blank" href="https://twitter.com/webforsoho" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a target="_blank" href="https://facebook.com/webforsoho" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a target="_blank" href="https://www.instagram.com/webforsoho/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/in/web-for-soho-solution-9b4411179/" class="icon brands alt fa-linkedin-in"><span class="label">Linked In</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Madrasah</li><li>All Rights Reserved</li></ul>
					</div>

			</div>

	</body>
</html>
