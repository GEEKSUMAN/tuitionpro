<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $header; ?><!--Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="<?php echo asset_url();?>images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Login</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Login-Section-->
		<section class="sptb">
			<div class="text-center text-danger h5" id="errors"></div>
			<?php if( null !==$this->session->flashdata('msg')) {
				?>
				<div class="text-center text-success h5"> <?php echo $this->session->flashdata('msg'); ?></div>

			<?php } ?>
			<div class="container customerpage">
				<div class="row">
					<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
						<div class="row">
							<div class="col-xl-12 col-md-12 col-md-12 register-right">
								<ul class="nav nav-tabs nav-justified mb-5 p-2 border" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active m-1" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link m-1" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="single-page  w-100  p-0">
											<div class="wrapper wrapper2">
												<form id="login" method="POST" action="<?php echo base_url('login/login_chk') ?>" class="card-body" tabindex="500">
													<h3 class="pb-2">Login</h3>
													<div class="mail">
														<input type="email" placeholder="Please enter your valid email"  name="mail">
														<label>E-Mail</label>
													</div>
													<div class="passwd">
														<input type="password" placeholder="Please enter your password"  name="password">
														<label>Password</label>
													</div>
													<div class="submit">
														<input  class="btn btn-primary btn-block" type="submit" value="Login" name="login">
													</div>
													<p class="mb-2"><a href="forgot.html" >Forgot Password</a></p>
													<p class="text-dark mb-0">Don't have account?<a href="<?php echo(base_url('register')) ?>" class="text-primary ml-1">Sign UP</a></p>
												</form>
											</div>
										</div>
									</div>
									<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										<div class="single-page w-100  p-0">
											<div class="wrapper wrapper2">
												<form id="Register" method="POST" action="<?php echo base_url('user/register'); ?>" class="card-body" tabindex="500">
													<h3 class="pb-1">Register</h3>									
													<div class="form-group">
														<input type="text" placeholder="Please enter your full name" required name="name">
														<label>Name</label>
													</div>
													<div class="form-group">
														<input type="email" placeholder="Please enter your valid email" required name="mail">
														<label>E-Mail</label>
													</div>
													<div class="form-group">
														<input type="password" placeholder="Please enter your password" name="password">
														<label>Password</label>
													</div>
													<div class="form-group">
														<select class="form-control custom-select" name="register_type" required>
														<option class="text-muted" value="">Please choose</option>
														<option value="1">Teacher</option>
														<option value="2">Student</option>
														<option value="3">Parent</option>
														<option value="4">Coaching Center</option>
														<option value="5">School</option>
													</select>
												    <label>Register as</label>
													</div>
													<div class="form-group">
											<label class="form-label">Board</label>
											<select id="Board" class="form-control custom-select" required name="board" placeholder="Select Education Board">
										  <optgroup label="Board">
										  	  <option value="">--Select---</option>
										  	  <?php $all_boards=all_boards();
										  	  	foreach ($all_boards as $boards) { ?>
										  	  		<option value="<?php echo $boards['id']; ?>"><?php echo $boards['board_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
										</div>
									<div class="form-group">
											<label class="form-label">Class</label>
										<select id="Class" class="form-control custom-select" name="classes" required placeholder="Select your class">
										  <optgroup label="Class">
										  	  <option value="">--Select---</option>
										  	  <?php $all_classes=all_classes();
										  	  	foreach ($all_classes as $class) { ?>
										  	  		<option value="<?php echo $class['id']; ?>"><?php echo $class['class_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
									</div>
													<div class="form-group">
														<input  class="btn btn-primary btn-block" type="submit" value="Register" name="register">
													</div>
													<p class="text-dark mb-0">Already have an account?<a href="<?php base_url('login');?>" class="text-primary ml-1">Sign In</a></p>
												</form>
								
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

		<!-- Newsletter-->
		<section class="sptb2 bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-6 col-md-12">
						<div class="sub-newsletter">
							<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-lg-5 col-xl-6 col-md-12">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg " placeholder="Enter your Email">
							<div class="input-group-append ">
								<button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
									Subscribe
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Newsletter-->

		<!-- Recent Post-->
		<section class="sptb2 border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="<?php echo asset_url();?>images/media/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="<?php echo asset_url();?>images/media/4.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="<?php echo asset_url();?>images/media/2.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Recent Post-->

<?php echo $footer; ?>
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url();?>js/custom-register-validation.js">
</script>
<script type="text/javascript" src="<?php echo asset_url();?>js/custom-login-validation.js">
</script>