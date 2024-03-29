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
										<img src="<?php if($profile_data['profile_photo']==""){$profile_data['profile_photo']='dummy.png';}  echo STUDENT_PHOTO."/".$profile_data['profile_photo'];?>" class="brround" alt="user">
									</div>
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold"><?php echo $profile_data['full_name']; ?></h4></a>
								</div>
							</div>
							<div class="item1-links  mb-0">
								<a href="<?php echo base_url('dashboard') ?>" class=" active d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
								</a>
								<a href="<?php echo base_url('dashboard/my-tutorials') ?>" class="d-flex  border-bottom">
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
						<form action="<?php echo base_url('dashboard/student/edit');?>" id="student_profile" method="post" enctype="multipart/form-data">
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
											  <input class="form-check-input" <?php if($profile_data['gender']=='Male') echo "checked"; ?> type="radio" name="gender" id="Radio1" value="Male">
											  <label class="form-check-label" for="Radio1">Male</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender']=='Female') echo "checked"; ?>  name="gender" id="Radio2" value="Female">
											  <label class="form-check-label" for="Radio2">Female</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender']=='Other') echo "checked"; ?> name="gender" id="Radio3" value="Other">
											  <label class="form-check-label" for="Radio3">Other</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Parent / Guardian Name</label>
											<input type="text" name="guardian_name" value="<?php echo $profile_data['guardian_name']; ?>" class="form-control" placeholder="Parent / Guardian Name">
											<small>If you have register on behalf of student please fill this</small>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Location</label>
											<input type="text" name="location" value="<?php echo $profile_data['location']; ?>" class="form-control" placeholder="Teaching Location / Area">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Postal Code</label>
											<input type="number" value="<?php echo $profile_data['zip']; ?>" name="zip_code" class="form-control" placeholder="ZIP Code">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-6">
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
									
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Teacher Gender Preference</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" <?php if($profile_data['gender_preference']=='Male') echo "checked"; ?> type="radio" name="gender_preference" id="inlineRadio1" value="Male">
											  <label class="form-check-label" for="inlineRadio1">Male</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender_preference']=='Female') echo "checked"; ?>  name="gender_preference" id="inlineRadio2" value="Female">
											  <label class="form-check-label" for="inlineRadio2">Female</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender_preference']=='Other') echo "checked"; ?> name="gender_preference" id="inlineRadio3" value="Other">
											  <label class="form-check-label" for="inlineRadio3">Other</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" <?php if($profile_data['gender_preference']=='No') echo "checked"; ?> name="gender_preference" id="inlineRadio4" value="No">
											  <label class="form-check-label" for="inlineRadio4">No</label>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
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
											<label class="form-label">Board</label>
											<select id="Board" class="form-control  border-bottom-0 w-100 select2-show-search" name="board" placeholder="Select Education Board">
										  <optgroup label="Boards">
										  	  <option>--Select---</option>
										  	  <?php $all_boards=all_boards();
										  	  	foreach ($all_boards as $boards) { ?>
										  	  		<option value="<?php echo $boards['id']; ?>"><?php echo $boards['board_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Class</label>
											<select id="student_class" class="form-control  border-bottom-0 w-100 select2-show-search" name="student_class" placeholder="Select your class">
										  <optgroup label="Class">
										  	  <option>--Select---</option>
										  	  <?php $all_classes=all_classes();
										  	  	foreach ($all_classes as $class) { ?>
										  	  		<option value="<?php echo $class['id']; ?>"><?php echo $class['class_name']; ?></option>
										  	  <?php	}
										  	  ?>									
										  </optgroup>
										</select>
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
<script type="text/javascript">
$( document ).ready(function() {
    $("#Subjects").select2({
    placeholder:        'Choose Subjects'
});
    $("#Board").select2({
    placeholder:        'Choose Boards'
});
$('#Subjects').val(<?php print_r(json_encode($subjects)) ;?>).trigger("change");
$('#Board').val(<?php print_r(json_encode($select_board)) ;?>).trigger("change");
$('#student_class').val(<?php print_r(json_encode($classes)) ;?>).trigger("change");
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
