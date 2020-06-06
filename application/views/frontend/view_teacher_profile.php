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

		<!--User Profile-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body pattern-1">
								<div class="wideget-user">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="wideget-user-desc text-center">
												<div class="wideget-user-img">
													<img class="brround" src="<?php if($teacher_profile['profile_photo']!=""){echo base_url('uploads/teacher_profiles/profile_photo/').$teacher_profile['profile_photo']; }else{echo base_url('uploads/demo_blank.png');}?>" alt="img">
												</div>
												<div class="user-wrap wideget-user-info">
													<a href="#" class="text-white"><h4 class="font-weight-semibold"><?php echo $teacher_profile['full_name']; ?></h4></a>
													
													<div class="wideget-user-rating">
														<div class="rating-stars">
															<?php if(count($reviews)>0){$average = ceil( array_sum(array_column($reviews,'rating_star_value')) / count($reviews) );} else{$average=0;}?>
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
														<span class="badge badge-primary badge-pill"><?php echo count($reviews); ?></span> Reviews
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="img-fluid" style="margin-left: auto;margin-right: auto; max-height: 40%; max-width:60%;" >
										<div class="embed-responsive embed-responsive-16by9" >
										  <iframe class="embed-responsive-item"  src="<?php if($teacher_profile['profile_video']==""){$teacher_profile['profile_video']='dummy.png';} echo base_url('uploads/teacher_profiles/profile_video/').$teacher_profile['profile_video'];?>" allowfullscreen></iframe>
										</div>
								</div>
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li class=""><a href="#tab-5" class="active" data-toggle="tab">Profile</a></li>
												<li><a href="#tab-7" data-toggle="tab" class="">Reviews<span class="badge badge-primary badge-pill"><?php echo count($reviews); ?></span></a></li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card mb-0">
							<div class="card-body">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-5">
											<div class="profile-log-switch">
												<div class="media-heading">
													<h3 class="card-title mb-3 font-weight-bold">Personal Details</h3>
												</div>
												<ul class="usertab-list mb-0">
													<li><a  class="text-dark"><span class="font-weight-semibold">Full Name :</span>  <?php echo $teacher_profile['full_name'] ;?></a></li>
													<li><a  class="text-dark"><span class="font-weight-semibold">Location :</span>  <?php echo $teacher_profile['location'] ;?></a></li>
													<li><a  class="text-dark"><span class="font-weight-semibold">Subjects :</span>  <?php echo $teacher_profile['subjects'] ;?></a></li>
													<li><a  class="text-dark"><span class="font-weight-semibold">Boards :</span>   <?php  echo $teacher_profile['boards'] ;?></a></li>
													<li><button class="btnl btn-primary"  data-id="<?php echo $teacher_profile['user_id'];?>" data-email="<?php echo $teacher_profile['email'];?>" data-mobile="<?php echo $teacher_profile['mobile'];?>" data-name="<?php echo $teacher_profile['full_name'];?>" id="view_contact" class="text-primary"><span class="font-weight-semibold">Contact:</span> </button></li>
													<li><a class="text-dark"><span class="font-weight-semibold">Classes :</span>  <?php  echo $teacher_profile['classes'] ;?></a></li>
													<li></li>
													<li><a id="email" class="text-dark d-none"><span class="font-weight-semibold">Email :</span>   <?php echo $teacher_profile['email'] ;?></a></li>
													<li><a id="mobile" class="text-dark d-none"><span class="font-weight-semibold">Phone :</span> +91  <?php echo $teacher_profile['mobile'] ;?> </a></li>
												</ul>
												<div class="row profie-img">
													<div class="col-md-12">
														<div class="media-heading">
															<h3 class="card-title mb-3 font-weight-bold">About Me</h3>
														</div>
														<p class="mb-0"><?php echo $teacher_profile['about_me'] ;?></p>
													</div>
												</div>
											</div>
										</div>
										
										<div class="tab-pane userprof-tab" id="tab-7">
											
											<div class="card">
							<div class="card-header">
								<h3 class="card-title">Reviews</h3>
							</div>
							<?php foreach ($reviews as $review) { 
								$student=get_student_details($review['student_id']);
								$student=$student[0];
								?>
							
							<div class="card-body p-0">
								
								<div class="media p-5 border-top mt-0">
									<div class="d-flex mr-3">
										<a > <img class="media-object brround" alt="64x64" src="<?php if($student['profile_photo']==""){$student['profile_photo']='dummy.png';} echo base_url('uploads/student_profiles/profile_photo/').$student['profile_photo'];?>"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold"><?php echo $student['full_name']; ?>
										<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar">  <?php echo date('d-M-Y',strtotime($review['date_added'])); ?></i> <i class=" ml-3 fa fa-clock-o"></i><?php echo date('h:m:i',strtotime($review['date_added'])); ?> </small><div class="rating-stars">
																	<input type="number"  readonly="readonly" class="rating-value star" name="rating-stars-value"  value="<?php echo $review['rating_star_value']; ?>">
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
                                        <p class="font-13  mb-2 mt-2">
                                           <?php echo $review['rating_comment']; ?>
                                        </p>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title"> <button id="write_review" class="btn btn-success"> Write Your Reviews </button></h3>
							</div>
							<div id="review_form" class="card-body d-none">
								<div class="form-group">Rate : <div class="rating-stars">
																	<input type="number" id="review_rating" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="1">
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
														</div></div>
								<div class="form-group">
									<textarea class="form-control" id="review_comment" name="review_comment" rows="6" placeholder="Write Your Comment"></textarea>
								</div>
								<a id="review_submit" class="btn btn-primary">Submit</a>
							</div>
						</div>
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
		<!--/User Profile-->

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

<script type="text/javascript">
	
$( document ).ajaxStart(function() {
  $( "#global-loader" ).removeAttr('style');
});
$( document ).ajaxComplete(function() {
  $("#global-loader").css("display","none")
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
	$(document).on( "click", '#view_contact',function(e) {
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
            $("#mobile, #email").removeClass('d-none');
            }else if(data==0){
            	$('#login_modal').modal('show');
            }else{
            	$("#mobile, #email").removeClass('d-none');
            }
          }
        });

});

	$(document).on( "click", '#write_review',function(e) {
    $.ajax({
          url: "<?php echo base_url('login_check_ajax');?>",
          cache: false,
          method:'POST',
          success: function( data ) {
           if(data==0){
            	$('#login_modal').modal('show');
            }else{
            	$("#review_form").removeClass('d-none');
            }
          }
        });
});

	$(document).on( "click", '#review_submit',function(e) {
	var rating_value = $("#review_rating").val();
	var review_comment = $("#review_comment").val();
	var teacher_id = $("#view_contact").data('id');
    $.ajax({
          url: "<?php echo base_url('tutor_review_submit');?>",
          cache: false,
          method:'POST',
          data: {
          	'teacher_user_id':teacher_id,
           'rating_value': rating_value,
           'review_comment':review_comment
          },
          success: function( data ) {
           if(data==1){
            	swal(
            	{
					  icon: 'success',
					  title: 'Thanks for review'
				});
            }else{
            	swal(
            	{
					  icon: 'warnning',
					  title: 'Opps',
					  text: 'Please try again!'
				});
            }
          }
        });
});
</script>