<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $header; ?>

<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="<?php echo asset_url();?>images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Register</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<div class="text-center text-danger h5" id="errors"></div>
			<?php if( null !==$this->session->flashdata('msg')) {
				?>
				<div class="text-center text-success h5"> <?php echo $this->session->flashdata('msg'); ?></div>

			<?php } ?>
			<div class="container customerpage">
				<div class="row">
				    <div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
								<form id="Register" method="POST" action="<?php echo base_url('user/register'); ?>" class="card-body" tabindex="500">
									<h3>Register</h3>									
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
										<option value="2">Student / Parent</option>
										<!-- <option value="3">Parent</option>
										<option value="4">Coaching Center</option>
										<option value="5">School</option> -->
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
									<p class="text-dark mb-0">Already have an account?<a href="<?php echo base_url('login');?>" class="text-primary ml-1">Sign In</a></p>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!-- Newsletter-->
		<section class="sptb2 bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-6 col-md-12">
						<div class="sub-newsletter">
							<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
							<p class="mb-0">You will  get latest notifications from us.</p>
						</div>
					</div>
					<div class="col-lg-5 col-xl-6 col-md-12">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg " id="subscribe_email" placeholder="Enter your Email">
							<div class="input-group-append ">
								<button  type="button" id="subscribe_btn" class="btn btn-primary btn-lg br-tr-3  br-br-3">
									Subscribe
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Newsletter-->

<?php echo $footer; ?>
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url();?>js/custom-register-validation.js">
</script>