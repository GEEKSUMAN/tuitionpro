<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $header; ?>
<style type="text/css">.card-pay .tabs-menu li {
    width: 50% !important;
}</style>
<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="<?php echo asset_url();?>images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">My Dashboard</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<?php if( null !==$this->session->flashdata('msg')) {
				?>
				<div class="text-center text-success h5"> <?php echo $this->session->flashdata('msg'); ?></div>

			<?php } ?>
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">My Dashboard</h3>
							</div>
							<div class="card-body text-center item-user border-bottom">
								<div class="profile-pic">
									<div class="profile-pic-img">
										<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span> 
										<img src="<?php if($profile_data['profile_photo']==""){$profile_data['profile_photo']='dummy.png';}  echo base_url('uploads/teacher_profiles/profile_photo/').$profile_data['profile_photo'];?>" class="brround" alt="user">
									</div>
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold"><?php echo $profile_data['full_name']; ?></h4></a>
								</div>
							</div>
							<div class="card-body text-center item-user border-bottom">
								<div class="profile-pic">
										<div class="embed-responsive embed-responsive-16by9">
										  <iframe class="embed-responsive-item" src="<?php if($profile_data['profile_video']==""){$profile_data['profile_video']='dummy.png';} echo base_url('uploads/teacher_profiles/profile_video/').$profile_data['profile_video'];?>" allowfullscreen></iframe>
										</div>
								</div>
							</div>
							<div class="item1-links  mb-0">
								<a href="<?php echo base_url('dashboard') ?>" class=" d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
								</a>
								<a href="<?php echo base_url('dashboard/my-tutorials') ?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> My Tutorials
								</a>
								<a href="<?php echo base_url('dashboard/access-keys') ?>" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> My Access Keys
								</a>
								<a href="<?php echo base_url('dashboard/enroll-students') ?>" class="  d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Enroll Students
								</a>
								<a href="<?php echo base_url('dashboard/my-bank-details');?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Bank Details
								</a>
								<a href="<?php echo base_url('dashboard/tution-enquiries') ?>" class="  d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Tution Enquiry
								</a>
								<a href="<?php echo base_url('dashboard/manage-credentials'); ?>" class="active d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-settings"></i></span> Change Password
								</a>
								<a href="<?php echo base_url('logout'); ?>" class="d-flex">
									<span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
								</a>
							</div>
						</div>
						
					</div>
					<div class="col-xl-9 col-lg-12 col-md-12">
							<div class="card">
							<div class="card-header">

							<h4 class="card-title float-left">Credentials</h4>
							<button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal4"><i class="ion-plus-circled" data-toggle="tooltip"  data-original-title="Add Subject"></i> Change</button>
						</div>
							<div class="card-body">
								<div class="card-body">
										<span class="card-header bg-info text-white h4">Password</span>
										<p class="bg-grey text-dark h3"><?php echo $this->session->userdata('user_password'); ?></p>
										<span class="card-header bg-info text-white h4">Email</span>
										<p class="bg-grey text-dark h3"><?php echo $this->session->userdata('user_email'); ?></p>
								</div>
							</div>
						</div>
					
					</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

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


<!--  Modal -->
			<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal4">Change Credentials</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('dashboard/manage-credentials'); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">							
						<div class="form-group">
							<label for="change_password" class="form-control-label">Password:</label>
							<input type="text" value="<?php echo $this->session->userdata('user_password'); ?>" name="change_password" class="form-control" id="change_password">
							<small class="text-primary">Password must contains One Small,One Capital,One number, One special character, min 6 characters .Otherswise you will not able to login.</small>
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Change</button>
						</div>
						</form>
					</div>
				</div>
			</div>

<?php echo $footer; ?>
