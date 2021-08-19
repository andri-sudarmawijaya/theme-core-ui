<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>CoreUI Free Bootstrap Admin Template</title>
  <!-- Icons-->
  <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.1/dist/css/coreui.min.css" rel="stylesheet">
  <link href="http://ci-smartyacl-coreui.local/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Main styles for this application-->
  <link href="http://ci-smartyacl-coreui.local/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <noscript>
    <strong>We're sorry but this app doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div class="c-app flex-row align-items-center">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">


			<div class="col-md-8">
				<div class="card-group">
					<div class="card p-4">
						<div class="card-body">

							<h1 class="bg-success text-white p-2"><?php echo $welcome; ?></h1>

							<div id="body">
								<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

								<p>If you would like to edit this page you'll find it located at:</p>
								<code>application/views/theme-core-ui/welcome_message.php</code>

								<p>The corresponding controller for this page is found at:</p>
								<code>application/controllers/theme-core-ui/Home.php</code>

								<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
							</div>

							<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

						</div>
					</div>
				</div>

      </div>
    </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.1/dist/js/coreui.bundle.min.js"></script>
</body>

</html>
