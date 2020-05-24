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
								<a href="<?php echo base_url('dashboard') ?>" class=" d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
								</a>
								<a href="<?php echo base_url('dashboard/my-tutorials') ?>" class="active d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> My Tutorials
								</a>
								<a href="managed.html" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Enroll Students
								</a>
								<a href="payments.html" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Payment Details
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
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">View Tutorial</h3>
							</div>
							<div class="card-body">
							<h4 class="card-title"><i class="fa fa-book text-success" aria-hiddentext-success="true"></i> <?php echo $tutorial[0]['title'];?></h3>		
				<div id="accordion">
					<?php $i=1;
						$sections=get_all_data('tutorials_section',array('tutorials_id' =>$tutorial[0]['tutorials_id'],'teacher_id'=>$tutorial[0]['teacher_id']));
					foreach ($sections as $section) { ?>
					
				  <div class="card">
				    <div class="card-header text-dark bg-light" id="heading-<?php echo $i;?>">
				      <h5 class="mb-0">
				        <button class="btn text-info" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
				          <span class="icon1 mr-3 text-primary"><i class="icon icon-folder-alt"></i></span><?php echo $section['section_name'];?>
				        </button>
				      </h5>
				       <a class="btn btn-danger btn-sm text-white"  href="<?php echo base_url('delete-tutorials-section/'.$section['section_id']);?>" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
				    </div>

				    <div id="collapse-<?php echo $i;?>" class="collapse" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion">
				      <div class="card-body">
					<ul class="list-group">
						<?php $j=1;
						$lessons=get_all_data('tutorials_lesson',array('tutorials_id' =>$section['tutorials_id'],'section_id'=>$section['section_id']));
					foreach ($lessons as $lesson) { ?>
					  <li class="list-group-item text-dark bg-light mb-2"><i class="fa fa-folder-open text-primary" aria-hidden="true"></i> <a class="btn border-0 bg-light " data-toggle="collapse" href="#Collapse-li-<?php echo $j;?>" role="button" aria-expanded="false" aria-controls="Collapse-li-<?php echo $j;?>"> <?php echo $lesson['lesson_name'];?></a> <a class="btn btn-danger btn-sm text-white" href="<?php echo base_url('delete-tutorials-lesson/'.$lesson['lesson_id']);?>" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
					    		<?php if($lesson['file_type']=='video/mp4,video/x-m4v,video/*') { ?>
					    			<a class="btn btn-success btn-sm text-white border-0" data-title="View Lesson" data-toggle="lightbox" href="<?php echo base_url('uploads/tutorials/lessons/videos/').$lesson['file_name'];?>" data-type="video"><i class="fa fa-eye"></i></a>
					    		<?php } else if($lesson['file_type']=='pdf'){ ?> <button id="loadiniframe" class="btn btn-success btn-sm text-white border-0" data-toggle="modal" data-target="#my-tutorials-pdf-lesson"data-src="<?php echo base_url('uploads/tutorials/lessons/documents/').$lesson['file_name'];?>"><i class="fa fa-eye"></i></button> <?php }else if($lesson['file_type']=='image/x-png,image/gif,image/jpeg'){?><a class="btn btn-success btn-sm text-white border-0" data-toggle="lightbox" data-title="View Lesson" href="<?php echo base_url('uploads/tutorials/lessons/images/').$lesson['file_name'];?>" data-type="image"><i class="fa fa-eye"></i></a> <?php }?>
					  	<div class="collapse" id="Collapse-li-<?php echo $j;?>">
					      <div class="card card-header mt-2 bg-light">
					    	<div class=" <?php if ($lesson['file_type']!='image/x-png,image/gif,image/jpeg'): ?>
					    		embed-responsive embed-responsive-16by9
					    	<?php endif ?> ">
					    		<?php if($lesson['file_type']=='image/x-png,image/gif,image/jpeg') { ?>
					    			<img class="img-fluid" src="<?php echo base_url('uploads/tutorials/lessons/images/').$lesson['file_name'];?>">
					    		<?php }else {?>
							  <iframe class="embed-responsive-item" src="<?php if($lesson['file_type']=='pdf'){ echo base_url('uploads/tutorials/lessons/documents/').$lesson['file_name'];}else if($lesson['file_type']=='video/mp4,video/x-m4v,video/*'){ echo base_url('uploads/tutorials/lessons/videos/').$lesson['file_name'];}else if($lesson['file_type']=='audio/mp3,audio/*'){ echo base_url('uploads/tutorials/lessons/audios/').$lesson['file_name'];}?>" allowfullscreen></iframe>
							<?php } ?>
							</div>
					      </div>
					    </div>
					  </li>
					<?php $j++; } ?>
					</ul>
				      </div>
				    </div>
				  </div>
				  <?php $i++; } ?>
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
		<!--  Modal -->
<div class="modal fade" id="my-tutorials-pdf-lesson" tabindex="-1" role="dialog" aria-labelledby="my-tutorials-pdf-lesson" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="my-tutorials-pdf">View Lesson</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" id="loadiniframesrc"  allowfullscreen></iframe>
</div>		  
      </div>
    </div>
  </div>
</div>
<!-- Modal end-->

<?php echo $footer; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />

<script type="text/javascript">
	$(window).on("load",function(){
$('iframe').contents().find('video').each(function () 
        {
            this.pause();
        });
})
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({ alwaysShowClose: true
                });
            });
	 $(document).on( "click", '#loadiniframe',function(e) {
    var urll = $(this).data('src');
    document.getElementById('loadiniframesrc').src = urll;
});
</script>