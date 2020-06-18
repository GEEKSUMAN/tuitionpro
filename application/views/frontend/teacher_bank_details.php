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
								<a href="<?php echo base_url('dashboard/access-keys') ?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> My Access Keys
								</a>
								<a href="<?php echo base_url('dashboard/enroll-students') ?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Enroll Students
								</a>
								<a href="<?php echo base_url('dashboard/my-bank-details');?>" class="active d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Bank Details
								</a>
								<a href="orders.html" class="d-flex  border-bottom">
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
								<h3 class="card-title">My Bank Details</h3>
							</div>
							<div class="card-body">
								<div class="card-pay">
									<ul class="tabs-menu nav">
										<li class=""><a href="#tab1" class="active" data-toggle="tab"><i class="fa fa-credit-card"></i> Add Bank Details</a></li>
										<li><a href="#tab3" data-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Details</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active show" id="tab1">
											<form id="add_bank_details" class="needs-validation" novalidate method="POST" enctype="multipart/form-data" name="add_bank_details">
											<div class="form-group">
												<label class="form-label">Account Holder Name</label>
												<input type="text" class="form-control" name="account_holder_name" id="account_holder_name" required placeholder="Account Holder Name">
											</div>
											<div class="form-group">
												<label class="form-label">Bank Account number</label>
												<div class="form-group">
													<input type="number"  class="form-control" required name="bank_account_no" placeholder="Bank Account number">
													
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group">
														<label class="form-label">Bank Name</label>
														<div class="form-group">
															<input type="text"  class="form-control" required placeholder="Bank Name" name="bank_name">
															
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">IFSC</label>
														<input type="text" class="form-control" name="ifsc" placeholder="IFSC" required>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-primary">Submit</button>
											</form>
										</div>

										<div class="tab-pane" id="tab3">
											<dl class="card-text">
											  <dt>BANK: </dt>
											  <dd> <?php if (isset($bank_details['bank_name'])) {
											  	echo $bank_details['bank_name'];
											  } ?></dd>
											</dl>
											<dl class="card-text">
											  <dt>Account number: </dt>
											  <dd> <?php if (isset($bank_details['account_no'])) {
											  	echo $bank_details['account_no'];
											  } ?></dd>
											</dl>
											<dl class="card-text">
											  <dt>IFSC</dt>
											  <dd><?php if (isset($bank_details['ifsc'])) {
											  	echo $bank_details['ifsc'];
											  } ?></dd>
											</dl>
											<dl class="card-text">
											  <dt>Account Holder Name</dt>
											  <dd><?php if (isset($bank_details['account_holder_name'])) {
											  	echo $bank_details['account_holder_name'];
											  } ?></dd>
											</dl>
											<p class="mb-0"><strong>Note:</strong> This details will be visible for your tutorials.</p>
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
<script type="text/javascript">
$( document ).ajaxStart(function() {
  $( "#global-loader" ).removeAttr('style');
});
$( document ).ajaxComplete(function() {
  $("#global-loader").css("display","none")
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
