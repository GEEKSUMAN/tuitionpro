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

		<!--Contact-->
		<div class="sptb bg-white mb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-xl-4 col-md-12">
						<div class="contact-description">
							<h2>Contact Us</h2>
							<p class="mt-5">For any help , Write Us.</p>
							<?php if( null !==$this->session->flashdata('msg')) {
									?>
									<div class="text-center text-success h5"> <?php echo $this->session->flashdata('msg'); ?></div>

								<?php } ?>
							<!-- <div class="mb-5">
								<small class="text-muted">Need Help?</small>
								<p class="mb-0 fs-16 font-weight-bold">me@Autolist.com</p>
							</div>
							<div class="mb-5">
								<small class="text-muted">Feel Like Talking?</small>
								<p class="mb-0 fs-16 font-weight-bold">+65 856 965 85</p>
							</div>
							<small class="text-muted">Socail Share</small>
							<ul class="list-unstyled list-inline mt-3 mb-5">
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-facebook bg-facebook"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-twitter bg-info"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-google-plus bg-danger"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-linkedin bg-linkedin"></i>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				    <div class="col-lg-7 col-xl-8 col-md-12">
						<div class="single-page" >
							<div class="col-lg-12 col-md-12 mx-auto d-block">
								<div class="wrapper wrapper2">
									<div class="card box-shadow-0 mb-0">
										<div class="card-body">
											<form action="<?php echo base_url('contact-us') ?>" method="post"> 
											<div class="form-group">
												<input type="text" name="full_name" required="true" class="form-control" id="name1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" name="email" required="true" class="form-control" id="email" placeholder="Email Address">
											</div>
											<div class="form-group">
												<textarea class="form-control" required="true" name="message" rows="6" placeholder="Message"></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Send Message</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->
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
	$('#find_tutors').on('click',function(){
     $('#find_tutors_form').submit();
 });
$('#find_tutorials').on('click',function(){
     $('#find_tutorials_form').submit();
 });
	
$( document ).ajaxStart(function() {
  $( "#global-loader" ).removeAttr('style');
});
$( document ).ajaxComplete(function() {
  $("#global-loader").css("display","none")
});
	
</script>