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
										<img src="<?php if($profile_data['profile_photo']==""){$profile_data['profile_photo']='dummy.png';} echo base_url('uploads/teacher_profiles/profile_photo/').$profile_data['profile_photo'];?>" class="brround" alt="user">
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
								<a href="<?php echo base_url('dashboard') ?>" class="d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
								</a>
								<a href="<?php echo base_url('dashboard/my-tutorials') ?>" class="active d-flex  border-bottom">
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
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">My Tutorials</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">
									<div class="tabs-menus">
										<!-- Tabs -->
										<ul class="nav panel-tabs">
											<li><a href="#tab1"  onClick="window.location.reload();" class="active" data-toggle="tab">All Tutorials</a></li>
											<li><a href="#tab2" data-toggle="tab">Chapter / Topic</a></li>
											<li><a href="#tab3" data-toggle="tab">Add Tutorials</a></li>
											<li><a href="#tab4" data-toggle="tab">Add Lesson</a></li>
											<li><a href="#tab5" data-toggle="tab">Free Tutorials</a></li>
											<li><a href="#tab6" data-toggle="tab">Paid Tutorials</a></li>
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
														<th>Status</th>
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
															<a href="#" class="badge badge-warning">Published</a>
														</td>
														<td>
															<!-- <a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a> -->
															<a href="<?php echo base_url('my-tutorials/delete/').$all_tutorials['tutorials_id'] ;?>" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-info btn-sm text-white" data-toggle="tooltip" href="<?php echo base_url('my-tutorials/view/').$all_tutorials['tutorials_id'] ;?>" data-original-title="View"><i class="fa fa-eye"></i></a>
															
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
										<div class="tab-pane  table-responsive border-top userprof-tab" id="tab2">
										
										<table class="table table-bordered table-hover text-nowrap mb-0">
											<thead>
													<tr>
														<th>Chapter / Topic <a class="btn float-right btn-primary btn-sm text-white" data-toggle="modal" data-target="#add-chapter-or-topic-modal"><i class="fa fa-plus"></i> Add</a></th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($chapter_or_topics as $chapter_or_topic) {
														?> 
													
													<tr>
														<td><?php echo $chapter_or_topic['name']; ?></td>
														<td><a id="edit_chapter_or_topic" class="btn btn-success btn-sm text-white" data-id="<?php echo $chapter_or_topic['chapter_or_topic_id'];?>" data-toggle="modal" data-target="#edit-chapter-or-topic-modal" data-chapter-or-topic="<?php echo $chapter_or_topic['name'];?>"><i class="fa fa-pencil"></i> Edit</a>
															<a id="delete_chapter_or_topic" href="<?php echo base_url('delete-chapter-or-topic/').$chapter_or_topic['chapter_or_topic_id'];?>" class="btn btn-primary btn-sm text-white" ><i class="fa fa-trash-o"></i> Delete</a>
													    </td>
													</tr>
													<?php } ?>
												</tbody>
										</table>
										</div>
										<div class="tab-pane  table-responsive border-top userprof-tab" id="tab3">
											<form id="add_tutorial" action="<?php echo base_url('add-my-tutorials') ?>" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
											  <div class="form-group">
											    <label for="tutorials_title">Title</label>
											    <input type="text" class="form-control" id="tutorials_title" placeholder="Please give your tutorial's title" required name="tutorials_title">
											    <div class="invalid-feedback">
										          Please give a title for your tutorial.
										        </div>
											  </div>
											  <div class="form-group">
											    <label for="tutorials_sub_title">Sub Title</label>
											    <textarea class="form-control" placeholder="Please give Sub Title for your tutorials" id="tutorials_sub_title" rows="3" required name="tutorials_sub_title"></textarea>
											    <div class="invalid-feedback">
										          Please give Sub title for your tutorial.
										        </div>
											  </div>
											  <div class="form-group">
											    <label for="tutorials_description">Description</label>
											    <textarea class="form-control" placeholder="Please give description for your tutorials" id="tutorials_description" rows="3" required name="tutorials_description"></textarea>
											    <div class="invalid-feedback">
										          Please give description for your tutorial.
										        </div>
											  </div>
											  <div class="form-group">
											    <label for="tutorials_prerequisite">Prerequisite</label>
											    <textarea class="form-control"  placeholder="Please give Prerequisites for your tutorial" id="tutorials_prerequisite" rows="3" required name="tutorials_prerequisite"></textarea>
											    <div class="invalid-feedback">
										          Please give prerequisite for your tutorial.
										        </div>
											  </div>
											  <div class="form-group">
											    <label for="tutorials_outcomes">Outcomes</label>
											    <textarea class="form-control" placeholder="Please give Outcomes for your tutorial" id="tutorials_outcomes" rows="3" required name="tutorials_outcomes"></textarea>
											    <div class="invalid-feedback">
										          Please give outcomes for your tutorial.
										        </div>
											  </div>
											  <div class="form-group">
											<label class="form-label">Choose Boards</label>
											<select id="Board" class="form-control border-bottom-0 select2-show-search" name="boards[]" multiple="multiple" required>
										  	  <?php
										  	  	foreach ($select_boards as $boards) { ?>
										  	  		<option value="<?php echo $boards['board_name']; ?>"><?php echo $boards['board_name']; ?></option>
										  	  <?php	}
										  	  ?>			
										</select>
										<div class="invalid-feedback">
										          Please Choose Board.
										        </div>
										</div>
										<div class="form-group">
											<label class="form-label">Choose Subject</label>
											<select id="Subjects" class="form-control border-bottom-0 select2-show-search" name="subjects" required>
												<option></option>
										  	  <?php 
										  	  	foreach ($subjects as $subject) { ?>
										  	  		<option value="<?php echo $subject['subject_name']; ?>"><?php echo $subject['subject_name']; ?></option>
										  	  <?php	}
										  	  ?>
										</select>
										<div class="invalid-feedback">
										          Please Choose Subject.
										        </div>
										</div>
										<div class="form-group">
											<label class="form-label">Choose Class</label>
											<select id="Classes" class="form-control border-bottom-0 select2-show-search" name="class" required>
												<option></option>
										  	  <?php 
										  	  	foreach ($classes as $class) { ?>
										  	  		<option value="<?php echo $class['class_name']; ?>"><?php echo $class['class_name']; ?></option>
										  	  <?php	}
										  	  ?>
										</select>
										<div class="invalid-feedback">
										          Please Choose Class.
										        </div>
										</div>
											  <div class="form-group">
											    <label for="tutorial_category">Choose Category</label>
											    <select class="custom-select select2-show-search" style="width: 100%" id="tutorial_category" placeholder="Search or choose category" name="tutorial_category" required>
											      <option></option>
											      <?php foreach ($categories as $category) {
														?> 
											      <option value="<?php echo $category['category_name'];?>"><?php echo $category['category_name'];?></option>
											    <?php } ?>
											    </select>
											    <div class="invalid-feedback">
										          Please choose category for your tutorial.
										        </div>
											  </div>
											  <div class="form-group">
											    <label for="tutorials_chapter_or_topic">Choose Chapter or Topic / Tag</label>
											    <select name="tutorials_chapter_or_topic" placeholder="Search or choose Chapter/Topic" style="width: 100%" class="form-control custom-select select2-show-search" id="tutorials_chapter_or_topic" required>
											    	 <option></option>
											      <?php foreach ($chapter_or_topics as $chapter_or_topic) {
														?> 
											      <option value="<?php echo $chapter_or_topic['name'];?>"><?php echo $chapter_or_topic['name'];?></option>
											    <?php } ?>
											    </select>
											  </div>
											  <div class="form-group">
											    <label for="tutorials_level">Choose Level</label>
											    <select name="tutorials_level" style="width: 100%" class="form-control custom-select select2-show-search" id="tutorials_level" required="">
											    	<option></option>
											      <option value="Beginner">Beginner</option>
											      <option value="Intermediate">Intermediate</option>
											      <option value="Expert">Expert</option>
											    </select>
											    <div class="invalid-feedback">
										          Please Level for your tutorial.
										        </div>
											  </div>
											  <div class="custom-control text-dark custom-radio custom-control-inline mr-2">
											  <input type="radio" id="tutorials_paid" value="Y" name="tutorials_paid" class="custom-control-input">
											  <label class="custom-control-label" for="tutorials_paid">Paid</label>
											  
											</div>
											<div class="custom-control text-dark custom-radio custom-control-inline mr-2">
											  <input type="radio" id="tutorials_free" value="N" name="tutorials_paid" class="custom-control-input">
											  <label class="custom-control-label" for="tutorials_free">Free</label>
											  
											</div>
											
										    
											<div id="tutorials_amt" class="form-inline d-none">
											<div class="form-group m-2">
											      <label class="mr-2" for="tutorials_price">Price (Rs)</label>
											      <input type="number" name="tutorials_price" value="0" id="tutorials_price" class="form-control" placeholder="Enter Price">
											      
											    </div>
											    <div class="form-group">
											      <label class="mr-2" for="tutorials_discount">Discount (If Any)</label>
											      <input type="number" name="tutorials_discount" value="0" id="tutorials_discount" class="form-control" placeholder="Discount (%)">
											    </div>
											    </div>
											    <div class="form-group mt-2">
											    <label for="tutorials_thumbnail">Thumbnail Image</label>
											    <div class="custom-file">
											    <input type="file" accept="image/*" onchange="showMyImage(this)" required class="custom-file-input" name="tutorials_thumbnail" id="tutorials_thumbnail">
											    <label class="custom-file-label">Choose file</label>
											    <div class="invalid-feedback">
										          Please upload image for your thumbnail.
										        </div>
										        </div>
										        <br/>
												<img id="preview_tutorial_thumbnil" class="img-thumbnail w-30"  src="<?php echo asset_url();?>images/media/f1.png" alt="image"/>
											  </div>
											  <!-- Progress bar -->
												<div class="progress">
												    <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated"></div>
												</div>
											    <button type="submit" class="btn btn-primary m-2">Add Tutorial</button>
											</form>
										</div>
										<div class="tab-pane  table-responsive border-top userprof-tab" id="tab4">

											<form id="add_lesson" action="<?php echo base_url('add-tutorials-lesson') ?>" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
											<div class="form-group mt-4">
													
												    <label for="tutorials_title_for_lesson">Tutorial</label>
												    <select name="tutorials_title_for_lesson" required class="form-control select2-show-search" placeholder="Search or choose Tutorial" style="width: 100%" id="tutorials_title_for_lesson">
												    <option></option>
												    <?php foreach ($tutorials_name as $tutorial_name) { ?>
												    	
												    	<option value="<?php echo $tutorial_name['tutorials_id'] ?>"><?php echo $tutorial_name['title'] ?><option>
												   <?php } ?>
											        </select>
											        <div class="invalid-feedback">
										          Please choose tutorial to upload lesson.
										        </div>
										    </div>

											<div class="form-group">
												<a data-target="#add_section_modal" data-toggle="modal" class="btn text-white float-right badge badge-pill badge-primary">Add Section <i class="fa fa-plus"></i></a>
											    <label for="lesson_section">Section</label>
											    <select name="lesson_section" required class="form-control select2-show-search" placeholder="Search or choose Section" style="width: 100%" id="lesson_section">
												    <option></option>
											        </select>
											        <div class="invalid-feedback">
										          Please choose section to upload lesson.
										        </div>										    
											 </div>

											 <div class="form-group">
											    <label for="lesson_name">Lesson Name</label>
											    <input type="text" required class="form-control" id="lesson_name" name="lesson_name" placeholder="Please give Lesson Name">
											    <div class="invalid-feedback">
										          Please give lesson name.
										        </div>
											  </div>

											<div class="form-group ">
											  <label for="lesson_file_type">File Type</label>
											    <select name="lesson_file_type" required class="form-control select2-show-search" placeholder="Search or choose file type" style="width: 100%" id="lesson_file_type">
												    <option></option>
													<option value="pdf">Documents (PDF only)</option>
												    <option value="video/mp4,video/x-m4v,video/*">Video</option>
												    <option value="audio/mp3,audio/*">Audio</option>
												    <option value="image/x-png,image/gif,image/jpeg">Image</option>
											    </select>
											    <div class="invalid-feedback">
										          Please choose file type to upload lesson file.
										        </div>
											 </div>

											 <div class="form-group lesson_file d-none">
											    <label for="lesson_file">Upload</label>
											    <input type="file" required class="form-control-file" name="lesson_file" id="lesson_file">
											    <div class="invalid-feedback">
										          Please upload file for your lesson.
										        </div>
										        <!-- Progress bar -->
												<div class="progress">
												    <div class="progress-bar  progress-bar-striped progress-bar-animated"></div>
												</div>
											  </div>
											  <button type="submit" class="btn btn-primary">Submit</button>
											</form>
										</div>
										<div class="tab-pane  table-responsive border-top userprof-tab" id="tab5">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th></th>
														<th>Item</th>
														<th>Category</th>
														<th>Price</th>
														<th>Ad Status</th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="#"></a>
																	<img src="<?php echo asset_url();?>images/media/f1.png" alt="img">
																</div>
																<div class="media-body">
																	<div class="card-item-desc ml-4 p-0 mt-2">
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">Liberty</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Nov-25-2019 , 16:54</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i> Offer</a>
																	</div>
																</div>
															</div>
														</td>
														<td>Vehicles</td>
														<td class="font-weight-semibold fs-16">$89</td>
														<td>
															<a href="#" class="badge badge-success">Active</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="#"></a>
																	<img src="<?php echo asset_url();?>images/media/f2.png" alt="img">
																</div>
																<div class="media-body">
																	<div class="card-item-desc ml-4 p-0 mt-2">
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">Millenium</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Nov-30-2019 , 11:54</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i> Offer</a>
																	</div>
																</div>
															</div>
														</td>
														<td>Vehicles</td>
														<td class="font-weight-semibold fs-16">$89</td>
														<td>
															<a href="#" class="badge badge-success">Active</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="#"></a>
																	<img src="<?php echo asset_url();?>images/media/v1.png" alt="img">
																</div>
																<div class="media-body">
																	<div class="card-item-desc ml-4 p-0 mt-2">
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">Ellesmere</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Nov-03-2019 , 12:50</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i> Used</a>
																	</div>
																</div>
															</div>
														</td>
														<td>Caledonia</td>
														<td class="font-weight-semibold fs-16">$35,978</td>
														<td>
															<a href="#" class="badge badge-success">Active</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane  table-responsive border-top userprof-tab" id="tab6">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th></th>
														<th>Item</th>
														<th>Category</th>
														<th>Price</th>
														<th>Ad Status</th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="#"></a>
																	<img src="<?php echo asset_url();?>images/media/h2.png" alt="img">
																</div>
																<div class="media-body">
																	<div class="card-item-desc ml-4 p-0 mt-2">
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">CrusaderRecusandae</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Nov-15-2019 , 12:45</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i> Offer</a>
																	</div>
																</div>
															</div>
														</td>
														<td>Vehicle</td>
														<td class="font-weight-semibold fs-16">$22,765</td>
														<td>
															<a href="#" class="badge badge-danger">Expired</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
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
<!-- add category Modal -->
<div class="modal fade" id="add-chapter-or-topic-modal" tabindex="-1" role="dialog" aria-labelledby="add-chapter-or-topic-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Chapter / Topic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-chapter-or-topic" class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?php echo base_url('add-chapter-or-topic') ?>">
	  <div class="form-group">
	    <input type="text" class="form-control" required name="chapter_or_topic" placeholder="Add Chapter or Topic" id="chapter_or_topic">
	    <div class="invalid-feedback">
	Please give Chapter or Topic name.
	</div>
	  </div>
										  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- add Chapter or Topic Modal end-->
<!--edit Chapter or Topic Modal -->
<div class="modal fade" id="edit-chapter-or-topic-modal" tabindex="-1" role="dialog" aria-labelledby="edit-chapter-or-topic-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Chapter / Topic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-chapter-or-topic" action="<?php echo base_url('edit-chapter-or-topic') ?>">
	  <div class="form-group">
	    <input type="text" id="edit_chapter_or_topic_name" class="form-control" name="edit_chapter_or_topic">
	    <input type="hidden" id="edit_chapter_or_topic_id" name="edit_chapter_or_topic_id">
	  </div>
										  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>
<!--edit Chapter or Topic Modal end -->
<!-- add section Modal -->
<div class="modal fade" id="add_section_modal" tabindex="-1" role="dialog" aria-labelledby="add_section_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add_section" class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?php echo base_url('add-tutorial-section') ?>">
	  <div class="form-group">
	    <input type="text" class="form-control" required name="add_tutorials_section" placeholder="Please give Section name" id="add_tutorials_section">
    <div class="invalid-feedback">
	Please give Section name.
	</div>
	  </div>
	  <div class="form-group">
													
    <label for="tutorials_title_for_section">Tutorial</label>
    <select name="tutorials_title_for_section" required class="form-control select2-show-search" placeholder="Search or choose Tutorial" style="width: 100%" id="tutorials_title_for_section">
    <option></option>
    <?php foreach ($tutorials_name as $tutorial_name) { ?>
    	
    	<option value="<?php echo $tutorial_name['tutorials_id'] ?>"><?php echo $tutorial_name['title'] ?><option>
   <?php } ?>
    </select>
    <div class="invalid-feedback">
	Please choose tutorial.
	</div>
</div>										  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- add Chapter or Topic Modal end-->

					
<?php echo $footer; ?>
<link rel="stylesheet" href="<?php echo asset_url();?>plugins/Rich-Text-Editor/richtext.min.css">
<script src="<?php echo asset_url();?>plugins/Rich-Text-Editor/jquery.richtext.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url();?>plugins/Rich-Text-Editor/custom-rich-text.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $(this).parent().find(".custom-file-label").html(fileName);

});
$("#add_tutorial").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var formData = new FormData(form[0]);
    var url = form.attr('action');
    $.ajax({
    		xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".progress-bar").width('0%');
            },
           type: "POST",
           url: url,
           data: formData,
           success: function(data)
           { if(data==1){
           		form.parent().find(".custom-file-label").html('Choose file');
           		$("#preview_tutorial_thumbnil").attr("src","http://localhost/tutionpro/assets/images/media/4.png");
           		form.removeClass('was-validated');
           		$("textarea").unRichText();
           		$('select').select2('val',0);
           		form.trigger("reset");
           		$.ajax({type: "POST",
			           url: '<?php echo base_url('get-tutorials');?>', 
			           success: function(result){
			     $(".progress-bar").width('0%');
			     $(".progress-bar").html('0%');
			    $('#tutorials_title_for_lesson').html(result);
			    $("#tutorials_title_for_lesson").select2({
				    placeholder: 'Please Choose or Search Tutorial'
				});
				$('#tutorials_title_for_section').html(result);
			    $("#tutorials_title_for_section").select2({
				    placeholder: 'Please Choose or Search Tutorial'
				});
			  }});
           		swal({
					  title: 'Tutorial Added successfully',
					  icon: "success",
					  button: "Ok",
					});
           	} else{
           		$(".progress-bar").width('0%');
           		$(".progress-bar").html('0%');
           		swal({
					  icon: 'error',
					  title: 'Oops...',
					  text: data
					})
           	}
           }
         });
});

$("#add_lesson").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var formData = new FormData(form[0]);
    var url = form.attr('action');
    $.ajax({
           xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".progress-bar").width('0%');
            },
           type: "POST",
           url: url,
           data: formData,
           success: function(data)
           { if(data==1){
           		$(".progress-bar").width('0%');
           		form.removeClass('was-validated');
           		$('select').select2('val',0);
           		form.trigger("reset");
           		swal({
					  title: 'Lesson Added successfully',
					  icon: "success",
					  button: "Ok",
					});
           	} else{
           		$(".progress-bar").width('0%');
           		$(".progress-bar").html('0%');
           		swal({
					  icon: 'error',
					  title: 'Oops...',
					  text: data
					});
           	}
           }
         });
});

$( document ).ready(function() {
    $("#tutorial_category").select2({
    placeholder: 'Please Choose or Search Category '
});
     $("#tutorials_chapter_or_topic").select2({
    placeholder: 'Please Choose or Search Topic '
});
 $("#tutorials_level").select2({
    placeholder: 'Please choose Level of the tutorial '
});
 $("#tutorials_title_for_lesson").select2({
    placeholder: 'Please Choose or Search Tutorial'
});
 $("#lesson_section").select2({
    placeholder: 'Please Choose or Search Section'
});
 $("#lesson_file_type").select2({
    placeholder: 'Please Choose file type'
});
 $("#tutorials_title_for_section").select2({
    placeholder: 'Please Choose or Search Tutorial'
});
 $("#Subjects").select2({
 	width:'100%',
    placeholder:'Choose or Search Subjects',

});
 $("#Classes").select2({
 	width:'100%',
    placeholder:'Choose or Search Class',

});
 $("#Board").select2({
 	width:'100%',
    placeholder:'Choose or Search Boards'
});
});

	$("#add-chapter-or-topic").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {	if(data!=0){
           		$("#add-chapter-or-topic").removeClass('was-validated');
           		$("#add-chapter-or-topic").trigger("reset");
           		$('#tab2').html(data);
           		swal({
					  title: 'Chapter or Topic Added successfully',
					  icon: "success",
					  button: "Ok",
					});
           	}
           }
         });
});
	 
	 $(document).on( "click", '#edit_chapter_or_topic',function(e) {
    var chapter_or_topic = $(this).data('chapter-or-topic');
    var id = $(this).data('id');
    $("#edit_chapter_or_topic_id").val(id);
    $("#edit_chapter_or_topic_name").val(chapter_or_topic);
});

	 $("#edit-chapter-or-topic").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {	
           		$("#edit-chapter-or-topic").removeClass('was-validated');
           		$("#edit-chapter-or-topic").trigger("reset");
           		$('#tab2').html(data);
           		swal({
					  title: 'Chapter or Topic Edited successfully',
					  icon: "success",
					  button: "Ok",
					});
           }
         });
});
$("#tutorials_paid").click(function(){
  $("#tutorials_amt").removeClass("d-none");
});
$("#tutorials_free").click(function(){
  $("#tutorials_amt").addClass("d-none");
  $("#tutorials_price").val("");
  $("#tutorials_discount").val("");
  
});

$("#lesson_file_type").change(function(){
  $(".lesson_file").removeClass("d-none");
  $('#lesson_file').attr("accept", "." + $(this).val());
});

	$("#add_section").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {	
           		if(data==1){
           		$("#add_section").removeClass('was-validated');
           		$("#add_section").trigger("reset");
           		$('select').select2('val',0);
           		swal({
					  title: 'Section Added successfully',
					  icon: "success",
					  button: "Ok",
					});
           	}
           }
         });
});

$("#tutorials_title_for_lesson").change(function(){
  var tutorials_id =$(this).val();
           		$.ajax({type: "POST",
			           url: '<?php echo base_url('get-my-sections');?>',
			           data: {'tutorials_id':tutorials_id }, 
			           success: function(result){
			    $('#lesson_section').html(result);
			    $("#lesson_section").select2({
				    placeholder: 'Please Choose or Search Section'
				});
			  }});
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

function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("preview_tutorial_thumbnil");            
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

/** form validation***/
</script>