<?php

//! =========================================================

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");

//! =========================================================

$buildAndroid = "https://a1.files.diawi.com/app-file/G2XpkP9vSF2s7uliEd62.apk";
$buildIOS = "./builds/excel_1.6.11.ipa";

?>

<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Carestream - DRX</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


		<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/favicons/manifest.json">
		<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/favicons/favicon.ico">
		<meta name="apple-mobile-web-app-title" content="Carestream - DRX">
		<meta name="application-name" content="Carestream - DRX">
		<meta name="msapplication-config" content="/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ef803e">

	</head>
	<body>

		<!-- Header -->
			<div id="header">
				<span class="logo icon">
					<img src="assets/img/oculus-rift.png" />
				</span>
				<h1><img src="assets/img/logo.png" /></h1>
				<p>Disfruta de nuestra experiencia de realidad virtual desarrollada especialmente para ti.</p>
			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container 75%">
					<h2>Descarga la aplicación</h2>
					<p></p>

					<ul class="actions">

						<?php if ($iPhone): ?>
							<li><a href="<?php echo $buildIOS; ?>" class="button"><i class="fa fa-apple"></i> Descargar para iPhone. <small>(Subiendo).</small></a></li>

						<?php elseif ($Android): ?>
							<li><a href="https://play.google.com/store/apps/details?id=com.google.samples.apps.cardboarddemo" class="button" style="background-color: #689F38;"><i class="fa fa-download"></i> Descargar Cardboard</a></li>
							<li><a href="<?php echo $buildAndroid; ?>" class="button"><i class="fa fa-android"></i> Descargar para Android</a></li>

						<?php else: ?>
							<li><a href="<?php echo $buildIOS; ?>" class="button"><i class="fa fa-apple"></i> Descargar para iPhone</a></li>
							<li><a href="<?php echo $buildAndroid; ?>" class="button"><i class="fa fa-android"></i> Descargar para Android</a></li>

						<?php endif; ?>
					</ul>
				</header>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">

					<header class="major last">
						<h2>Disfruta el recorrido</h2>
					</header>

					<p>También te invitamos a mantenerte en contacto desde nuestras redes sociales y sitio web.</p>

					<ul class="icons">
						<li><a href="https://twitter.com/carestream" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/carestream/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="http://www.carestream.mx/indexmxes.html" class="icon fa-globe"><span class="label">Instagram</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Carestream. All rights reserved.</li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>