<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#162946">
		<meta name="theme-color" content="#e72a1a">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="Tuition Pro optimized" content="320">
		<meta name="description" content="Learn from best Tutors and Coaching Centers for Tuition, Exam Prep, Hobby Classes, IT Courses, and hundreds of other learning categories, on India&#39;s favourite Learning Marketplace.">
		<meta name="keywords" content="TutionPro - Find Tutors, Trainers and Coaching Centers for your Learning Requirement">
		<link rel="icon" href="<?php echo asset_url();?>favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo asset_url();?>favicon.ico" />

		<!-- Title -->
		<title>TuitionPro.In - Find Tutors, Trainers and Coaching Centers for your Learning Requirement</title>

		<!-- Bootstrap Css -->
		<link href="<?php echo asset_url();?>plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="<?php echo asset_url();?>css/style.css" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="<?php echo asset_url();?>css/icons.css" rel="stylesheet"/>

		<!--Horizontal Menu-->
		<link href="<?php echo asset_url();?>plugins/horizontal-menu/horizontal.css" rel="stylesheet" />

		<!--Select2 Plugin -->
		<link href="<?php echo asset_url();?>plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- Owl Theme css-->
		<link href="<?php echo asset_url();?>plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo asset_url();?>plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Color-Skins -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo asset_url();?>color-skins/color13.css" />

		<style type="text/css">
@media screen and (min-width: 992px) {
  .scrollable-menu {
    height: auto;
    max-height: 400px;
    overflow-x: hidden;
}
}

footer ul.divide-li-2 {
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
}
.ui-autocomplete {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    display: none;
    min-width: 160px;   
    padding: 4px 0;
    margin: 0 0 10px 25px;
    list-style: none;
    background-color: #ffffff;
    border-color: #ccc;
    border-color: rgba(0, 0, 0, 0.2);
    border-style: solid;
    border-width: 1px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    *border-right-width: 2px;
    *border-bottom-width: 2px;
}

.ui-menu-item{
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 18px;
    color: #555555;
    white-space: nowrap;
    text-decoration: none;
}

.ui-menu-item:hover{
    color: #ffffff;
    text-decoration: none;
    background-color: #e72a1a;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    background-image: none;
}
</style>
	</head>
	<body>

		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo asset_url();?>images/loader.svg" class="loader-img " alt="">
		</div>

		<!--Topbar-->
		<div class="header-main">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
							<div class="top-bar-left d-flex">
								<!-- <div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
										</li>
									</ul>
								</div> -->
								
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
							<div class="top-bar-right">
								<ul class="custom">
									<li>
										<a href="<?php echo base_url('register'); ?>" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
									</li>
									<li>
										<a href="<?php echo base_url('login'); ?>" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url('dashboard'); ?>" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a href="<?php echo base_url('dashboard'); ?>" class="dropdown-item" >
												<i class="dropdown-icon icon icon-user"></i> My Profile
											</a>
											
											<a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
												<i class="dropdown-icon icon icon-power"></i> Log out
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Horizontal Header -->
			<div class="horizontal-header clearfix ">
				<div class="container">
					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
					<span class="smllogo"><img src="<?php echo base_url('uploads/logo/').get_logo();?>" width="120" alt=""/></span>
					<a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- /Horizontal Header -->

			<!-- Horizontal Main -->
			<div class="horizontal-main  bg-dark-transparent clearfix">
				<div class="horizontal-mainwrapper container clearfix">
					<div class="desktoplogo">
						<a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('uploads/logo/').get_logo();?>" alt=""></a>
					</div>
					<div class="desktoplogo-1">
						<a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('uploads/logo/').get_logo();?>" alt=""></a>
					</div>
					<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="<?php echo base_url('home'); ?>">Home</a>
							</li>
							<li aria-haspopup="true"><a href="#" >Tutorials<span class="fa fa-caret-down m-0"></span></a>
								<div class="horizontal-megamenu clearfix">
									<div class="container">
										<div class="megamenu-content">
											<div class="row">
												<ul class="col link-list scrollable-menu">
													<li class="title">Subject</li>
													<?php $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
													<li><a href=""><?php echo $subjects['subject_name'];?></a></li>
													<?php } ?>
												</ul>
												<ul class="col link-list scrollable-menu">
													<li class="title">Class</li>
													<?php $all_classes=all_classes(); foreach ($all_classes as $classes) { ?>
													<li><a href=""><?php echo $classes['class_name'];?></a></li>
													<?php } ?>
												</ul>
												<ul class="col link-list scrollable-menu ">
													<li class="title">Board/University/Council</li>
													<?php $all_boards=all_boards(); foreach ($all_boards as $boards) { ?>
													<li><a href=""><?php echo $boards['board_name'];?></a></li>
													<?php } ?>
												</ul>
												<ul class="col link-list scrollable-menu">
													<li class="title">Category</li>
													<?php $all_category=all_category(); foreach ($all_category as $category) { ?>
													<li><a href=""><?php echo $category['category_name'];?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li aria-haspopup="true"><a href="<?php echo base_url('find/tutors'); ?>">Tutors</a></li>
							<li aria-haspopup="true"><a href="<?php echo base_url('about-us'); ?>">About Us </a></li>
							<li aria-haspopup="true"><a href="<?php echo base_url('contact-us'); ?>"> Contact Us <span class="horizontalarrow"></span></a></li>
						</ul>
			
					</nav>
					<!--Nav-->
				</div>
			</div>
			<!-- /Horizontal Main -->
		</div>
		<!-- /Topbar -->