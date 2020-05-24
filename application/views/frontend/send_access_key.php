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
								<a href="<?php echo base_url('dashboard/access-keys') ?>" class="active d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> My Access Keys
								</a>
								<a href="<?php echo base_url('dashboard/enroll-students') ?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Enroll Students
								</a>
								<a href="<?php echo base_url('dashboard/my-bank-details');?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Bank Details
								</a>
								<a href="<?php echo base_url('dashboard/tution-enquiries') ?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Tution Enquiry
								</a>
								<a href="settings.html" class="d-flex border-bottom">
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
								<h3 class="card-title">Access Keys</h3>
							</div>
							<div class="card-body">
								<div class="card-pay">
									<ul class="tabs-menu nav">
										<li class=""><a href="#tab1" class="active" data-toggle="tab"><i class="fa fa-credit-card"></i> Send Key</a></li>
										<li><a href="#tab3" data-toggle="tab" class=""><i class="fa fa-university"></i> View Keys</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active show" id="tab1">
											<form id="send_access_keys" class="needs-validation" novalidate method="POST" enctype="multipart/form-data" name="send_access_keys">
											<div class="form-group mt-4">
													
												    <label for="tutorials_id">Select Tutorial</label>
												    <select name="tutorials_id" required class="select2 select2-show-search" placeholder="Search or choose Tutorial" style="width: 100%" id="tutorials_id">
												    <option></option>
												    <?php foreach ($tutorials_name as $tutorial_name) { ?>
												    	
												    	<option value="<?php echo $tutorial_name['tutorials_id'] ?>"><?php echo $tutorial_name['title'] ?><option>
												   <?php } ?>
											        </select>
											        
										    </div>
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control" name="send_email" id="send_email" required placeholder="To Email Address">
											</div>
											<div class="form-group">
												<label class="form-label">Access Keys</label>
												<div class="input-group">
													<input type="text" value="<?php echo access_key_gen();?>"  class="form-control" id="access_key" required name="access_key" placeholder="Access Key">
													<div class="input-group-append">
												    <span id="generate" class="input-group-text text-white btn btn-primary">Generate</span>
												  </div>
													
												</div>
											</div>
											<button type="submit" class="btn btn-primary">Send</button>
											</form>
										</div>

										<div class="tab-pane" id="tab3">
												<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr class="bg-success">
														<th class="text-white">Tutorial</th>
														<th class="text-white">Access Key</th>
														<th class="text-white">Email (Sent)</th>
													</tr>
												</thead>
												<tbody>
													
													<?php foreach ($access_codes as $access_code) { ?>
													
													<tr>
														<td>
															<?php echo get_tutorial_title($access_code['tutorials_id']);?>
														</td>
														<td><?php echo $access_code['access_code'];?></td>
														<td> <?php echo $access_code['email'];?></td>
														
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
							<p class="mb-0">Get Latests updates</p>
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
				<h6 class="fs-18 mb-4">Latest Tutorials</h6>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$( document ).ajaxStart(function() {
  $( "#global-loader" ).removeAttr('style');
});
$( document ).ajaxComplete(function() {
  $("#global-loader").css("display","none")
});
	$( document ).ready(function() {
    $("#tutorials_id").select2({
    placeholder: 'Please Choose or Search Tutorial'
});
});

$( "#generate" ).on( "click", function() {
 
  $.ajax({
    		processData: false,
    		contentType: false,
           type: "POST",
           url: "<?php echo base_url('tutorials/gen_code');?>",
           success: function(data)
           { 
           	 $("#access_key").val(data);
           }
         });
});
$('#add_bank_details').submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var formData = new FormData(form[0]);
    var url = "<?php echo base_url('teacher/add_bank_details');?>";
    $.ajax({
    		processData: false,
    		contentType: false,
           type: "POST",
           url: url,
           data: formData,
           success: function(data)
           { if(data==1){
           		form.removeClass('was-validated');
           		form.trigger("reset");
           		swal({
					  title: 'Bank Details Added successfully',
					  icon: "success",
					  button: "Ok",
					});
           		location.reload();
           	} else{
           		swal({
					  icon: 'error',
					  title: 'Oops...',
					  text: data
					});
           	}
           }
         });
});

$('#send_access_keys').submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var formData = new FormData(form[0]);
    var url = "<?php echo base_url('tutorials/send_access_keys');?>";
    $.ajax({
    	   processData: false,
    	   contentType: false,
           type: "POST",
           url: url,
           data: formData,
           success: function(data)
           { if(data==1){
           		form.removeClass('was-validated');
           		form.trigger("reset");
           		swal({
					  title: 'Access key send successfully',
					  icon: "success",
					  button: "Ok",
					});
           		location.reload();
           	} else if(data==2){
           		swal({
					  icon: 'error',
					  title: 'Oops...',
					  text: "please generate another key!"
					});
           	}
           }
         });
});
/** form validation**/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
