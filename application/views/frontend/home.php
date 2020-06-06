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
													<option value="<?php echo $classes['id'];?>"><?php echo $classes['class_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="board_id" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Board">
																<option>Board</option>
													<?php $all_boards=all_boards(); foreach ($all_boards as $boards) { ?>
													<option value="<?php echo $boards['id'];?>"><?php echo $boards['board_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="subject_id" class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
															<optgroup label="Subject">
																<option>Subject</option>
													<?php $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
													<option value="<?php echo $subjects['id'];?>"><?php echo $subjects['subject_name'];?></option>
													<?php } ?>			
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location">
														<div class="row no-gutters bg-white br-2">
															<div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0">
																<input type="text" name="location" class="form-control border" id="sale-location" placeholder="Area / Location">
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
													<option  value="<?php echo $subjects['subject_name'];?>"><?php echo $subjects['subject_name'];?></option>
													<?php } ?>			
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="board_name" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Board">
																<option>Board</option>
													<?php $all_boards=all_boards(); foreach ($all_boards as $boards) { ?>
													<option  value="<?php echo $boards['board_name'];?>"><?php echo $boards['board_name'];?></option>
													<?php } ?>
															</optgroup>
														</select>
													</div>
													<div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
														<select name="category_name" class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select">
															<optgroup label="Category">
																<option>Category</option>
													<?php $all_category=all_category(); foreach ($all_category as $category) { ?>
													<option value="<?php echo $category['category_name'];?>"><?php echo $category['category_name'];?></option>
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
		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Latest Tutorials</h2>
				</div>
				<div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
					<?php foreach ($list_tutorials as $list_tutorial) { ?>
					<div class="item">
						<div class="card mb-0">
							<div class="ribbon ribbon-top-left text-danger"><span class="bg-success"><?php if($list_tutorial['is_paid']=='N'){ echo "Free";} else if($list_tutorial['percentage_of_discount']==0){?><i class="fa fa-inr mr-2"></i><?php echo $list_tutorial['price'];} else if($list_tutorial['percentage_of_discount']>0){?>
												<i class="fa fa-inr mr-2"></i><s><?php echo $list_tutorial['price'];?></s> <?php echo  ceil($list_tutorial['price']-($list_tutorial['price']*$list_tutorial['percentage_of_discount']/100));?><?php }?></span></div>
							<div class="item-card2-img">
								
								<img src="<?php if($list_tutorial['thumbnail_img']!=""){echo base_url('uploads/tutorials/thumbnails/').$list_tutorial['thumbnail_img']; }else{echo base_url('uploads/demo_blank.png');}?>" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-info"> New</span>
									<span class="text-white bg-primary"> Trending</span>
								</div>
								<div class="item-card2-icons">
									<span class="badge badge-pill badge-primary"><i class="fa fa-asterisk" aria-hidden="true"></i> Offer</span>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<a  class="text-dark"><h4 class="font-weight-semibold mt-1"> <?php echo $list_tutorial['title'];?></h4></a>
																	<div class="item-card9-desc mb-2">
																
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-inr text-muted mr-1"></i><?php if($list_tutorial['price']==0){ $list_tutorial['price'] ='Free';} echo $list_tutorial['price'];?></span></a>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i><?php echo date('d-M-Y',strtotime($list_tutorial['date_added']));?></span></a></br>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-user-secret text-muted mr-1 "></i></i><?php echo get_full_name($list_tutorial['teacher_id']);?></span></a>
																	
																	<p class="mb-0 leading-tight"><?php echo $list_tutorial['sub_title'];?></p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary"> <?php echo $average = get_tutorial_rating($list_tutorial['tutorials_id']);?>/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="<?php echo $average; ?>">
												<div class="rating-stars-container">
													<div class="rating-star sm ">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm ">
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
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button class="mb-0 mt-0 btn btn-success"><a href="<?php echo base_url('tutorial/').$list_tutorial['slug']; ?>" class="btn-lg text-white">View Tutorial</a> </button>
							</div>
						</div>
					</div>

				<?php } ?>
				</div>
			</div>
		</section>
		<!--Section-->

		
		<!--Section-->
		<section>
			<div class="about-1 cover-image sptb bg-background-color" data-image-src="<?php echo asset_url();?>images/banners/banner2.jpg">
				<div class="content-text mb-0 text-white info">
					<div class="container">
						<div class="row text-center">
							<div class="col-lg-3 col-md-6">
								<div class="counter-status md-mb-0">
									<div class="counter-icon">
										<i class="ti-user"></i>
									</div>
									<h5>Tutors</h5>
									<h2 class="counter mb-0"><?php print_r(total_user('1'));?></h2>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status-1 md-mb-0">
									<div class="counter-icon text-warning">
										<i class="ti-user"></i>
									</div>
									<h5>Students</h5>
									<h2 class="counter mb-0"><?php print_r(total_user('2'));?></h2>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status md-mb-0">
									<div class="counter-icon text-primary">
										<i class="ti-package"></i>
									</div>
									<h5>Tutorials</h5>
									<h2 class="counter mb-0"><?php print_r(all_tutorials());?></h2>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status">
									<div class="counter-icon text-success">
										<i class="ti-face-smile"></i>
									</div>
									<h5>Total Users</h5>
									<h2 class="counter mb-0"><?php print_r(all_users());?></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->
		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Recently Joined</h2>
					
				</div>
				<div id="defaultCarousel1" class="owl-carousel Card-owlcarousel owl-carousel-icons">
					<?php foreach ($recently_joined as $recently) { ?>
					
					
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php $file_location = ($recently['registration_type']==1) ? base_url('uploads/teacher_profiles/profile_photo/'): base_url('uploads/student_profiles/profile_photo/') ; if($recently['profile_photo']=="") { $profile_photo='dummy.png'; }else{ $profile_photo =$recently['profile_photo'];} echo $file_location.$profile_photo;?>" alt="User" style="max-height: 250px" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a ><i class="fa fa-calendar-o text-muted mr-2"></i><?php echo date('D,d-M-Y',strtotime($recently['join_date'])) ?></a>
									<div class="ml-auto">
										<a ><i class="fa fa-comment-o text-muted mr-2"></i><?php $user_type = ($recently['registration_type']==1) ? 'Teacher' : 'Student' ; echo $user_type; ?></a>
									</div>
								</div>
								<a  class="text-dark"><h4 class="fs-20"><?php echo $recently['full_name'];?></h4></a>
								<p><?php echo $recently['about_me']; ?></p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php $file_location = ($recently['registration_type']==1) ? base_url('uploads/teacher_profiles/profile_photo/'): base_url('uploads/student_profiles/profile_photo/') ;  echo $file_location.$recently['profile_photo'];?>" class="avatar brround avatar-md mr-3" alt="User">
									<div>
										<a class="text-default"><?php echo $recently['location'];?></a>
										<small class="d-block text-muted"> Joined 
											<?php $postdate = date('Y-m-d',strtotime($recently['join_date']));
												$today = date('Y-m-d'); // today date
												$diff = strtotime($today) - strtotime($postdate);
												echo $days = (int)$diff/(60*60*24); ?> Days ago
																			
										</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!--Section-->

		
		<!--Section-->
		<section class="sptb border-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="bg-white p-0 border box-shadow2">
							<div class="card-body">
								<h6 class="fs-18 mb-4">Are you a Teacher?</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<p>If you are a tutor join with us.</p>
								<a href="#" class="btn btn-primary text-white">Be a Teacher</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bg-white p-0 mt-5 mt-md-0 border box-shadow2">
							<div class="card-body">
								<h6 class="fs-18 mb-4">Are You Looking For Tutors?</h6>
								<hr class="deep-purple  accent-2 border-success mb-4 mt-0 d-inline-block mx-auto">
								<p>If you are looking for best tutors, you can join with us.</p>
								<a href="#" class="btn btn-success text-white">Find Tutors</a>
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
</script>