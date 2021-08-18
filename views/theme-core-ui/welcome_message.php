<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>

<html lang="en">

<head>
	<base href="./">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
	<title>CoreUI Free Bootstrap Admin Template</title>
	<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link href="css/style.css" rel="stylesheet">

	<meta name="robots" content="noindex">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-118965717-1');
	</script>
</head>

<body class="c-app flex-row align-items-center">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card-group">
					<div class="card p-4">
						<div class="card-body">

							<h1>Welcome to CodeIgniter!</h1>

							<div id="body">
								<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

								<p>If you would like to edit this page you'll find it located at:</p>
								<code>application/views/welcome_message.php</code>

								<p>The corresponding controller for this page is found at:</p>
								<code>application/controllers/Welcome.php</code>

								<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
							</div>

							<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

						</div>
					</div>
					<div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
						<div class="card-body text-center">
							<div>
								<h2>Sign up</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
	<!--[if IE]><!-->
	<script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
	<!--<![endif]-->
</body>

</html>