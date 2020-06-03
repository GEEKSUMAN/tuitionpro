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
		<title>TuitionPro.in Admin Dashboard</title>

		<!-- Sidemenu Css -->
		<link href="<?php echo asset_url();?>plugins/sidemenu/sidemenu.css" rel="stylesheet" />

		<!-- Bootstrap Css -->
		<link href="<?php echo asset_url();?>plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="<?php echo asset_url();?>css/style.css" rel="stylesheet" />
		<link href="<?php echo asset_url();?>css/admin-custom.css" rel="stylesheet" />

		<!-- JQVMap -->
		<link href="<?php echo asset_url();?>plugins/jqvmap/jqvmap.min.css" rel="stylesheet"/>

		<!-- Morris.js Charts Plugin -->
		<link href="<?php echo asset_url();?>plugins/morris/morris.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo asset_url();?>plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo asset_url();?>css/icons.css" rel="stylesheet"/>

		<!-- Color-Skins -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo asset_url();?>color-skins/color13.css" />

	</head>
	<body class="app sidebar-mini">

		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo asset_url();?>images/loader.svg" class="loader-img " alt="">
		</div>
		<!--/Loader-->

		<!--Page-->
		<div class="page">
			<div class="page-main">

				<!--Header-->
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="<?php echo base_url('admin/manage/logo'); ?>">
								<img src="<?php echo base_url('uploads/logo/').get_logo();?>" class="header-brand-img" alt="TuitionPro.In">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							
							<div class="d-flex order-lg-2 ml-auto">
								
								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
										<img src="<?php echo asset_url();?>images/users/male/25.jpg" alt="Admin" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										
										<a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>">
											<i class="dropdown-icon icon icon-power"></i> Log out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/Header-->