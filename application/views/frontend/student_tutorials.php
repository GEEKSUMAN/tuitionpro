<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $header; ?>
<style type="text/css">
	.select2-search__field{
		width: 250px !important;
	}
</style>
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
										<img src="<?php if($profile_data['profile_photo']==""){$profile_data['profile_photo']='dummy.png';}  echo base_url('uploads/student_profiles/profile_photo/').$profile_data['profile_photo'];?>" class="brround" alt="user">
									</div>
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold"><?php echo $profile_data['full_name']; ?></h4></a>
								</div>
							</div>
							
							<div class="item1-links  mb-0">
								<a href="<?php echo base_url('dashboard') ?>" class=" d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
								</a>
								<a href="<?php echo base_url('dashboard/my-tutorials') ?>" class="active d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> My Tutorials
								</a>
								
								<a href="<?php echo base_url('dashboard/tution-enquiries') ?>" class="  d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Tution Enquiry
								</a>
								<a href="<?php echo base_url('dashboard/manage-credentials'); ?>" class=" d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-settings"></i></span> Change Password
								</a>
								<a href="<?php echo base_url('logout'); ?>" class="d-flex">
									<span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
								</a>
							</div>
						</div>
											
					</div>

					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">My Tutorials</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">
									<div class="tabs-menus">
										<!-- Tabs -->
										<ul class="nav panel-tabs">
											<li><a href="#tab1" class="active" data-toggle="tab">All Tutorials</a></li>
											
										</ul>
									</div>
									<div class="tab-content">
										<div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Tutorial</th>
														<th>Chapter / Topic</th>
														<th>Price</th>
														
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													
													<?php foreach ($all_tutorial as $all_tutorials) { ?>
													
													<tr>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="<?php echo base_url('tutorial/').$all_tutorials['slug'];?>" target="_blank"></a>
																	<img src="<?php echo base_url('uploads/tutorials/thumbnails/').$all_tutorials['thumbnail_img'];?> "alt="img">
																</div>
																<div class="media-body">
																	<div class="card-item-desc ml-4 p-0 mt-2">
																		<a href="<?php echo base_url('tutorial/').$all_tutorials['slug'];?>" class="text-dark" target="_blank"><h4 class="font-weight-semibold"><?php echo $all_tutorials['title'];?></h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> <?php echo $all_tutorials['date_added'];?></a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i><?php echo $all_tutorials['category'];?></a>
																	</div>
																</div>
															</div>
														</td>
														<td><?php echo $all_tutorials['category'];?></td>
														<td class="font-weight-semibold fs-16"><?php $price = ($all_tutorials['price']==0) ? "Free" : $all_tutorials['price'] ; echo $price;?></td>
														
														<td>
															
															<a class="btn btn-info btn-sm text-white" data-toggle="tooltip" href="<?php echo base_url('my-tutorials/view/').$all_tutorials['tutorials_id'] ;?>" data-original-title="View"><i class="fa fa-eye"></i></a>
															
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
																			
										
									</div>
								</div>
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
