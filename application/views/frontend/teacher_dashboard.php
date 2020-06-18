<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $header; ?>
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
								<a href="<?php echo base_url('dashboard') ?>" class="active d-flex border-bottom">
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
								<a href="<?php echo base_url('dashboard/my-bank-details');?>" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Bank Details
								</a>
								<a href="<?php echo base_url('dashboard/tution-enquiries') ?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Tution Enquiry
								</a>
								<a href="<?php echo base_url('dashboard/manage-credentials'); ?>" class="d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-settings"></i></span> Change Password
								</a>
								<a href="<?php echo base_url('logout'); ?>" class="d-flex">
									<span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
								</a>
							</div>
						</div>
						
					</div>
					<div class="col-xl-9 col-lg-12 col-md-12">
						<form action="<?php echo base_url('dashboard/teacher/edit');?>" id="teacher_profile" method="post" enctype="multipart/form-data">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Edit Profile</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Full Name</label>
											<input type="text" value="<?php echo $profile_data['full_name']; ?>" name="full_name" class="form-control" placeholder="Full Name">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Email address</label>
											<input type="email" name="email" disabled value="<?php echo $profile_data['email'];?>"class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Phone Number</label>
											<input type="number" value="<?php echo $profile_data['mobile']; ?>"  name="mobile" class="form-control" placeholder="Number">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Gender</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" <?php if($profile_data['gender']=='Male') echo "checked"; ?> type="radio" name="gender" id="inlineRadio1" value="Male">
											  <label class="form-check-label" for="inlineRadio1">Male</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender']=='Female') echo "checked"; ?>  name="gender" id="inlineRadio2" value="Female">
											  <label class="form-check-label" for="inlineRadio2">Female</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender']=='Other') echo "checked"; ?> name="gender" id="inlineRadio3" value="Other">
											  <label class="form-check-label" for="inlineRadio3">Other</label>
											</div>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Location</label>
											<input type="text" name="location" value="<?php echo $profile_data['location']; ?>" class="form-control" placeholder="Teaching Location / Area">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label class="form-label">Postal Code</label>
											<input type="number" value="<?php echo $profile_data['zip']; ?>" name="zip_code" class="form-control" placeholder="ZIP Code">
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label class="form-label">Distance willing to travell</label>
											<select name="travel_distance" class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select Distance">
												<optgroup label="Categories">
													<option>--Select--</option>
													<option  <?php if($profile_data['travel_distance']=='0') echo "selected"; ?> value="0">0 Km</option>
													<option  <?php if($profile_data['travel_distance']=='3') echo "selected"; ?> value="3">3 Km</option>
													<option <?php if($profile_data['travel_distance']=='5') echo "selected"; ?> value="5">5 Km</option>
													<option <?php if($profile_data['travel_distance']=='10') echo "selected"; ?> value="10">10 Km</option>
													<option <?php if($profile_data['travel_distance']=='15') echo "selected"; ?> value="15">15 Km</option>
													<option <?php if($profile_data['travel_distance']=='30') echo "selected"; ?> value="30">30 Km</option>
													
												</optgroup>
											</select>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label class="form-label">Class Location</label>
											<div class="form-check form-check-inline">
											  <input name="class_location_home" <?php if($profile_data['class_location_home']=='Y') echo "checked"; ?> class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Y">
											  <label class="form-check-label" for="inlineCheckbox1">Home</label>
											</div>
											<div class="form-check form-check-inline">
											  <input name="class_location_online" <?php if($profile_data['class_location_online']=='Y') echo "checked"; ?> class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Y">
											  <label class="form-check-label" for="inlineCheckbox2">Online</label>
											</div>
											<div class="form-check form-check-inline">
											  <input name="class_location_travel" <?php if($profile_data['class_location_travel']=='Y') echo "checked"; ?> class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Y">
											  <label class="form-check-label" for="inlineCheckbox3">Travel</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Boards</label>
											<select id="Board" class="form-control  border-bottom-0 w-100 select2-show-search" name="boards[]" placeholder="Select Boards" multiple="multiple">
										  <optgroup label="Boards">
										  	  <option>--Select---</option>
										  	  <?php $all_boards=all_boards();
										  	  	foreach ($all_boards as $boards) { ?>
										  	  		<option value="<?php echo $boards['id']; ?>"><?php echo $boards['board_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
										<small>You can choose multiple</small>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Classes</label>
											<select id="teacher_class" class="form-control  border-bottom-0 w-100 select2-show-search" name="teacher_class[]" placeholder="Select your class" multiple="multiple">
										  <optgroup label="Class">
										  	  <option>--Select---</option>
										  	  <?php $all_classes=all_classes();
										  	  	foreach ($all_classes as $class) { ?>
										  	  		<option value="<?php echo $class['id']; ?>"><?php echo $class['class_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
										<small>You can choose multiple</small>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Subjects</label>
											<select id="Subjects" class="form-control  border-bottom-0 w-100 select2-show-search" name="subjects[]" placeholder="Select Subjects" multiple="multiple">
										  <optgroup label="Subjects">
										  	  <option>--Select---</option>
										  	  <?php $all_subjects=all_subjects();
										  	  	foreach ($all_subjects as $subject) { ?>
										  	  		<option value="<?php echo $subject['id']; ?>"><?php echo $subject['subject_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
										<small>You can choose multiple</small>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">About Me</label>
											<textarea rows="5" name="about_me" class="form-control" value="<?php echo $profile_data['about_me']; ?>" placeholder="Enter About your description"><?php echo $profile_data['about_me']; ?></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Change Profile Image</label>
											<div class="custom-file">
												<input type="file" accept="image/*" onchange="showMyImage(this)" class="custom-file-input" name="profile_image">
												<label class="custom-file-label">Choose file</label>
											</div>
										</div><div class="form-group">
											<label class="form-label">Preview Image</label>
											<img id="preview_profile_image" class="img-thumbnail w-30"  src="<?php echo asset_url();?>images/media/f1.png" alt="image"/>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-0">
											<label class="form-label mr-3">Change Introduction Video</label>
											<div class="custom-file">
												<input type="file" accept="video/mp4,video/3gp,video/*" class="custom-file-input" name="profile_video">
												<label class="custom-file-label">Choose file</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-success">Update Profile</button>
							</div>
						</div>
					</form>
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
$( document ).ready(function() {
    $("#Subjects").select2({
    placeholder:        'Choose Subjects'
});
    $("#Board").select2({
    placeholder:        'Choose Boards'
});
$('#Subjects').val(<?php print_r(json_encode($subjects)) ;?>).trigger("change");
$('#Board').val(<?php print_r(json_encode($select_boards)) ;?>).trigger("change");
$('#teacher_class').val(<?php print_r(json_encode($classes)) ;?>).trigger("change");
});

$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $(this).parent().find(".custom-file-label").html(fileName);

});
function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("preview_profile_image");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
</script>
