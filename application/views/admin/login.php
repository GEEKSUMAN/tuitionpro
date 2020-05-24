<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#162946">
		<meta name="theme-color" content="#e67605">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>TuitionPro.in Admin</title>

		<!-- Bootstrap Css -->
		<link href="<?php echo asset_url();?>plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo asset_url();?>plugins/sidemenu/sidemenu.css" rel="stylesheet" />

		<!-- Dashboard css -->
		<link href="<?php echo asset_url();?>css/style.css" rel="stylesheet" />
		<link href="<?php echo asset_url();?>css/admin-custom.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo asset_url();?>plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo asset_url();?>css/icons.css" rel="stylesheet"/>

		<!-- Color-Skins -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo asset_url();?>color-skins/color13.css" />

	</head>
	<body class="construction-image">

		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo asset_url();?>images/loader.svg" class="loader-img " alt="">
		</div>
		<!--/Loader-->

		<!--Page-->
		<div class="page page-h">
			<div class="page-content z-index-10">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card box-shadow-0 mb-0">
								<div class="card-header ">
									<h2 class="card-title text-center text-primary">Login to Admin Dashboard </h2>
									
								</div>
								<div class="card-body">
								<?php if( null !==$this->session->flashdata('msg')) { ?>
									<div class="text-center text-success h5"> <?php echo $this->session->flashdata('msg'); ?></div>

								<?php } ?>
									<form action="<?php echo base_url('admin/login_chk_admin'); ?>" name="admin_login" method="post">
									<div class="form-group">
										<label class="form-label text-dark">Email address</label>
										<input type="email" name="email" class="form-control" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Password</label>
										<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-footer mt-2">
										<button type="submit" class="btn btn-primary btn-block">Log In</button>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Page-->

		<!-- JQuery js-->
		<script src="<?php echo asset_url();?>js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="<?php echo asset_url();?>plugins/bootstrap-4.3.1/js/popper.min.js"></script>
		<script src="<?php echo asset_url();?>plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="<?php echo asset_url();?>js/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="<?php echo asset_url();?>js/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="<?php echo asset_url();?>plugins/rating/jquery.rating-stars.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo asset_url();?>plugins/scroll-bar/jquery.mCustomScrollbar.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo asset_url();?>plugins/sidemenu/sidemenu.js"></script>

		<!--Counters -->
		<script src="<?php echo asset_url();?>plugins/counters/counterup.min.js"></script>
		<script src="<?php echo asset_url();?>plugins/counters/waypoints.min.js"></script>

		<!-- Custom Js-->
		<script src="<?php echo asset_url();?>js/admin-custom.js"></script>

	</body>
</html>