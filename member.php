<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Python Editorial Member's Area</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	
		<?php
			session_start();
			if(!isset($_SESSION['email'])) {
				header('location:login.php');
			}
		?>
	
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Logo -->
								<a href="index.php" class="logo">
									<img style="width:70%;" src="python-editorial-logo.png" alt="Python Editorial Logo" />
								</a>
						</div>
					</header>

				

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>This is Python Editorial, a free, once-weekly email roundup of Python news, articles and projects with codes.</h1>
								<p>Access all the issues of Python Editorial here. Please <b>share Python Editorial with others</b> so they can benefit too.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="issue1.html">
										<h2>Issue 1</h2>
										<div class="content">
											<p>May 16, 2020</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="issue2.html">
										<h2>Issue 2 (Coming Soon)</h2>
										<div class="content">
											<p>May 23, 2020</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
									<!-- Python Editorial Square Ads -->
									<ins class="adsbygoogle"
										 style="display:block"
										 data-ad-client="ca-pub-5747013921515016"
										 data-ad-slot="2021417396"
										 data-ad-format="auto"
										 data-full-width-responsive="true"></ins>
									<script>
										 (adsbygoogle = window.adsbygoogle || []).push({});
									</script>
								</article>
								<!--
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="issue3.html">
										<h2>Issue 3</h2>
										<div class="content">
											<p>May 23, 2020</p>
										</div>
									</a>
								</article>
								-->
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/CoderEren" target="_blank" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Python Editorial. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>