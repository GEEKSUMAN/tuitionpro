<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $header; ?>


<!--Section-->
		<section>
			<div class="banner-2 cover-image sptb-2 sptb-tab bg-background2" data-image-src="<?php echo asset_url();?>images/banners/banner1.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="mb-1">Find The Best Tutors or Tutorials</h1>
							<p>Please search for any things you want</p>
						</div>
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								<div class="item-search-tabs">
									<div class="item-search-menu">
										<ul class="nav">
											<li class=""><a href="#tab1" class="active" data-toggle="tab">Tutor</a></li>
											<li><a href="#tab2" data-toggle="tab">Tutorial</a></li>
										</ul>
									</div>
									<div class="tab-content index-search-select">
										<div class="tab-pane active" id="tab1">
											<div class="search-background">
												<form id="find_tutors_form" action="<?php echo base_url('find/tutors');?>" method="post">
												<div class="form row no-gutters">
													
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">

														<select name="class_id" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Class">
																<option>Class</option>
													<?php $all_classes=all_classes(); foreach ($all_classes as $classes) { ?>
													<option <?php if (isset($tutor_search_data['class_id']) && $tutor_search_data['class_id']==$classes['id']) { echo "selected";} ?> value="<?php echo $classes['id'];?>"><?php echo $classes['class_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="board_id" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Board">
																<option>Board</option>
													<?php $all_boards=all_boards(); foreach ($all_boards as $boards) { ?>
													<option <?php if (isset($tutor_search_data['board_id']) && $tutor_search_data['board_id']==$boards['id']) { echo "selected";} ?> value="<?php echo $boards['id'];?>"><?php echo $boards['board_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="subject_id" class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
															<optgroup label="Subject">
																<option>Subject</option>
													<?php $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
													<option <?php if (isset($tutor_search_data['subject_id']) && $tutor_search_data['subject_id']==$subjects['id']) { echo "selected";} ?> value="<?php echo $subjects['id'];?>"><?php echo $subjects['subject_name'];?></option>
													<?php } ?>			
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location">
														<div class="row no-gutters bg-white br-2">
															<div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0">
																<input type="text" value="<?php if (isset($tutor_search_data['location']) && $tutor_search_data['location']!="") { echo $tutor_search_data['location'];} ?>" name="location" class="form-control border" id="sale-location" placeholder="Area / Location">
																<span><i class="fa fa-map-marker location-gps mr-1"></i> </span>
																</div>
															<div class="col-xl-4 col-lg-5 col-md-12 mb-0">
																<a id="find_tutors" class="btn btn-block btn-primary  fs-14"><i class="fa fa-search"></i> Search</a>
															</div>
														</div>
													</div>
												</form>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab2">
											<div class="search-background">
												<form id="find_tutorials_form" action="<?php echo base_url('find/tutorials');?>" method="post">
												<div class="form row no-gutters">
													
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="subject_name" class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
															<optgroup label="Subject">
																<option>Subject</option>
													<?php $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
													<option <?php if (isset($search_data['subject_name']) && $search_data['subject_name']==$subjects['subject_name']) { echo "selected";} ?> value="<?php echo $subjects['subject_name'];?>"><?php echo $subjects['subject_name'];?></option>
													<?php } ?>			
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="board_name" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Board">
																<option>Board</option>
													<?php $all_boards=all_boards(); foreach ($all_boards as $boards) { ?>
													<option <?php if (isset($search_data['board_name']) && $search_data['board_name']==$boards['board_name']) { echo "selected";} ?>  value="<?php echo $boards['board_name'];?>"><?php echo $boards['board_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="category_name" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Category">
																<option>Category</option>
													<?php $all_category=all_category(); foreach ($all_category as $category) { ?>
													<option <?php if (isset($search_data['category_name']) && $search_data['category_name']==$category['category_name']) { echo "selected";} ?> value="<?php echo $category['category_name'];?>"><?php echo $category['category_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location ui-widget">
														<div class="row no-gutters bg-white br-2">
															<div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0">
																<input name="tutorials_name" id="tutorials_name" type="text" class="form-control border" placeholder="Search Keywords">
																<span><i class="fa fa-search location-gps mr-1"></i> </span>
															</div>
															<div class="col-xl-4 col-lg-5 col-md-12 mb-0">
																<a  id="find_tutorials" class="btn btn-block btn-primary  fs-14"><i class="fa fa-search"></i> Search</a>
															</div>
														</div>
													</div>
												</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</section>
		<!--Section-->

<!--listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<!--Left Side Content-->
					<div class="col-xl-3 col-lg-3 col-md-12">
						<form action="<?php echo base_url('find/tutors/apply-filters'); ?>" method="post">
						<div class="card">
							<div class="card-header h4 text-white bg-primary">
								Filter By
							</div>
						</div>
						<div class="card">
							<div class="px-4 py-3 border-bottom">
								<h4 class="mb-0">Class</h4>
							</div>
							<div class="card-body">
								<div class="" id="container2">
									<div class="filter-product-checkboxs">
										<?php  $all_classes=all_classes(); foreach ($all_classes as $classes) { ?>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" <?php if (isset($filter_data['classes']) && in_array($classes['id'],$filter_data['classes'])){ echo "checked";} ?>
											name="classes[]" value="<?php echo $classes['id'];?>">
											<span class="custom-control-label">
												<a href="#" class="text-dark"><?php echo $classes['class_name'];?><span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom">
								<h4 class="mb-0">Subject</h4>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										<?php  $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" <?php if (isset($filter_data['subjects']) && in_array($subjects['id'],$filter_data['subjects'])){ echo "checked";} ?> class="custom-control-input" name="subjects[]" value="<?php echo $subjects['id'];?>">
											<span class="custom-control-label">
												<a href="#" class="text-dark"><?php echo $subjects['subject_name'];?><span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<?php  }?>
									</div>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h5 class="mb-0">Board / University / Council</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="form-group col-md-12 mb-0">
										<select id="inputState1" name="board_filter" class="form-control select2-show-search">
											<option>Board</option>
													<?php $all_boards=all_boards(); foreach ($all_boards as $boards) { ?>
													<option <?php if (isset($filter_data['board_filter']) && $boards['id']==$filter_data['board_filter']){ echo "selected";} ?> value="<?php echo $boards['id'];?>"><?php echo $boards['board_name'];?></option>
													<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Location / Area </h4>
							</div>
							<div class="card-body">
								<div class="input-group">
									<input type="text" name="loaction_filter" value="<?php if (isset($filter_data['loaction_filter']) && $filter_data['loaction_filter']!=""){ echo $filter_data['loaction_filter'];} ?>" class="form-control br-tl-3  br-bl-3" placeholder="Location">
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Class Location</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" <?php if (isset($filter_data['class_location_student']) && $filter_data['class_location_student']=="Y"){ echo "checked";} ?> class="custom-control-input" name="class_location_student" value="Y">
										<span class="custom-control-label">
											Student's Place
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" <?php if (isset($filter_data['class_location_tutor']) && $filter_data['class_location_tutor']=="Y"){ echo "checked";} ?> class="custom-control-input" name="class_location_tutor" value="Y">
										<span class="custom-control-label">
											Tutor's Place
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" <?php if (isset($filter_data['class_location_online']) && $filter_data['class_location_online']=="Y"){ echo "checked";} ?> class="custom-control-input" name="class_location_online" value="Y">
										<span class="custom-control-label">
											Online
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Gender Preference</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" <?php if (isset($filter_data['gender_pref_male']) && $filter_data['gender_pref_male']=="Male"){ echo "checked";} ?> class="custom-control-input" name="gender_pref_male" value="Male">
										<span class="custom-control-label">
											Male
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" <?php if (isset($filter_data['gender_pref_female']) && $filter_data['gender_pref_female']=="Female"){ echo "checked";} ?> class="custom-control-input" name="gender_pref_female" value="Female">
										<span class="custom-control-label">
											Female
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" <?php if (isset($filter_data['gender_pref_other']) && $filter_data['gender_pref_other']=="Other"){ echo "checked";} ?> class="custom-control-input" name="gender_pref_other" value="Other">
										<span class="custom-control-label">
											Other
										</span>
									</label>
									
								</div>
							</div>
							
							<div class="card-footer">
								<button type="submit" class="btn btn-secondary btn-block">Apply Filter</button> 
							</div>
						</form>
						</div>
						<!-- <div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Shares</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-filter-icons text-center">
									<a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
									<a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div> -->
					</div>
					<!--/Left Side Content-->

					<div class="col-xl-9 col-lg-9 col-md-12">
						<!--Lists-->
						<div class=" mb-0">
							<div class="">
								<div class="item2-gl ">
									<div class=" mb-0">
										<div class="">
											<div class="bg-white p-5 item2-gl-nav d-flex">
												<h6 class="mb-0 mt-3 text-left">Showing 1 to <?php echo count($list_tutors); ?> of <?php echo $total_rows; ?> entries</h6>
												<ul class="nav item2-gl-menu ml-auto mt-1">
													<li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
												<!-- <div class="d-sm-flex">
													<label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
													<div class="selectgroup">
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Popularity" class="selectgroup-input">
															<span class="selectgroup-button">Popularity</span>
														</label>
														<label class="selectgroup-item mb-0">
															<input type="radio" name="value" value="Rating" class="selectgroup-input">
															<span class="selectgroup-button">Rating</span>
														</label>
													</div>
												</div> -->
											</div>
										</div>
									</div>
									<div class="tab-content">
										<div class="tab-pane active" id="tab-11">
											<?php foreach ($list_tutors as $list_tutor) { ?>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
														<img src="<?php if($list_tutor['profile_photo']!=""){echo base_url('uploads/teacher_profiles/profile_photo/').$list_tutor['profile_photo']; }else{echo base_url('uploads/demo_blank.png');}?>" alt="img" class="cover-image">
														</div>
														<div class="item-overly-trans">
															<div class="rating-stars">
																<?php $average = get_teacher_rating($list_tutor['user_id']);?>
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="<?php echo $average; ?>">
																<div class="rating-stars-container">
																	<div class="rating-star sm">
																		<i class="fa fa-star"></i>
																	</div>
																	<div class="rating-star sm">
																		<i class="fa fa-star"></i>
																	</div>
																	<div class="rating-star sm">
																		<i class="fa fa-star"></i>
																	</div>
																	<div class="rating-star sm">
																		<i class="fa fa-star"></i>
																	</div>
																	<div class="rating-star sm">
																		<i class="fa fa-star"></i>
																	</div>
																</div>
															</div>
															<span><a  id="teacher_contact" data-email="<?php echo $list_tutor['email'];?>" data-mobile="<?php echo $list_tutor['mobile'];?>" data-name="<?php echo $list_tutor['full_name'];?>" data-id="<?php echo $list_tutor['user_id'];?>" role="button" class="btn bg-primary <?php if(isset($already_contact) && in_array($list_tutor['user_id'],$already_contact)){
																echo'disabled';
															} ?>" <?php if(isset($already_contact) && in_array($list_tutor['user_id'],$already_contact)){
																echo'aria-disabled="true"';
															}?>><?php if(isset($already_contact) && in_array($list_tutor['user_id'],$already_contact)){
																echo"Already ";
															} ?>Contact</a></span>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="cars.html" class="text-dark"><h4 class="font-weight-semibold mt-1"> <?php echo $list_tutor['full_name'];?></h4></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i><?php echo $list_tutor['location'];?></span></a>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>Joined  <?php echo date('d-M-Y',strtotime($list_tutor['date_added']));?></span></a>
																</div>
																<p class="mb-0 leading-tight"><?php echo $list_tutor['about_me'];?></p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4 pr-4 pl-4">
															<div class="item-card9-footer d-sm-flex">
																<div class="item-card9-cost">
																	<button class="mb-0 mt-0 btn btn-success"><a href="<?php echo base_url('view/teacher/profile/').$list_tutor['user_id']; ?>" class="btn-lg text-white">View Profile</a> </button>
																</div>
																
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
										</div>
										<div class="tab-pane" id="tab-12">
											<div class="row">
												<?php foreach ($list_tutors as $list_tutor) { ?>
												<div class="col-lg-6 col-md-12 col-xl-4">
													
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															
															<div class="item-card9-imgs">
																
																<img src="<?php if($list_tutor['profile_photo']!=""){echo base_url('uploads/teacher_profiles/profile_photo/').$list_tutor['profile_photo']; }else{echo base_url('uploads/demo_blank.png');}?>" alt="img" class="cover-image">
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<?php

																	 $average = get_teacher_rating($list_tutor['user_id']);?>
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="<?php echo $average; ?>">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
																<span><a  id="teacher_contact" data-email="<?php echo $list_tutor['email'];?>" data-mobile="<?php echo $list_tutor['mobile'];?>" data-name="<?php echo $list_tutor['full_name'];?>" data-id="<?php echo $list_tutor['user_id'];?>" role="button" class="btn bg-primary <?php if(isset($already_contact) && in_array($list_tutor['user_id'],$already_contact)){
																echo'disabled';
															} ?>" <?php if(isset($already_contact) && in_array($list_tutor['user_id'],$already_contact)){
																echo'aria-disabled="true"';
															}?>><?php if(isset($already_contact) && in_array($list_tutor['user_id'],$already_contact)){
																echo"Already ";
															} ?>Contact</a></span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a  class="text-dark"><h4 class="font-weight-semibold mt-1"><?php echo $list_tutor['full_name'];?></h4></a>
																	<div class="item-card9-desc mb-2">
																		<a class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i><?php echo $list_tutor['location'];?></span></a>
																		<a  class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>Joined  <?php echo date('d-M-Y',strtotime($list_tutor['date_added']));?></span></a>
																	</div>
																	<p class="mb-0 leading-tight"><?php echo $list_tutor['about_me'];?></p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<button class="mb-0 mt-0 btn btn-success"><a href="<?php echo base_url('view/teacher/profile/').$list_tutor['user_id']; ?>" class="btn-lg text-white">View Profile</a></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									<?php echo $pagination_link; ?>
								</div>
							</div>
						</div>
						<!--/Lists-->
					</div>
				</div>
			</div>
		</section>
		<!--/Listing-->

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
		<!-- Newsletter-->

<!-- Popup Login-->
		<div id="login_modal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content ">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login as Student or Parent</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="single-page customerpage " >
							<div class="wrapper wrapper2 box-shadow-0">
								<form id="login" method="POST" action="<?php echo base_url('login/login_chk') ?>" class="card-body" tabindex="500">
								<h3 class="pb-2">Login</h3>
								<div class="mail">
									<input type="email" placeholder="Please enter your registered email"  name="mail">
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
				</div>
			</div>
		</div>
		<!-- End Popup Login-->

<?php echo $footer; ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript"> 

$('#find_tutors').on('click',function(){
     $('#find_tutors_form').submit();
 });
$('#find_tutorials').on('click',function(){
     $('#find_tutorials_form').submit();
 });

$("#tutorials_name").autocomplete({
source: function( request, response ) {
        $.ajax({
          url: "<?php echo base_url('search_tutorials_autocomplete');?>",
          cache: false,
          method:"POST",
          dataType: "json",
          data: {
           'search_keyword': request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
// select: function(event,ui) { 
//     window.location.href = ui.item.the_link;
// }
});

$( document ).ajaxStart(function() {
  $( "#global-loader" ).removeAttr('style');
});
$( document ).ajaxComplete(function() {
  $("#global-loader").css("display","none")
});

$(document).on( "click", '#teacher_contact',function(e) {
   var teacher_id = $(this).data('id');
    var teacher_email = $(this).data('email');
    var teacher_name = $(this).data('name');
    var teacher_mobile = $(this).data('mobile');
    $.ajax({
          url: "<?php echo base_url('contact_tutor');?>",
          cache: false,
          method:"POST",
          data: {
           'teacher_user_id': teacher_id,
           'teacher_email':teacher_email,
           'teacher_name':teacher_name,
           'teacher_mobile':teacher_mobile
          },
          success: function( data ) {
            if(data==1){
            swal(
            	{
					  icon: 'success',
					  title: 'Thanks for contact',
					  text: 'Turor will get the notification and will get back to you soon. You can see their contat details on your profile dashboard or check your email inbox.'
				});
            }else if(data==0){
            	$('#login_modal').modal('show');
            }
          }
        });

});


</script>