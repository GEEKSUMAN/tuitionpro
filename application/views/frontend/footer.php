<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--Footer Section-->
		<footer class="bg-dark-purple text-white">
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-12">
							<h6>Subjects</h6>
							<ul class="list-unstyled mb-0 divide-li-2">
							<?php $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
							<li><a href=""><?php echo $subjects['subject_name'];?></a></li>
							<?php } ?>
							</ul>
						</div>
						<div class="col-lg-2 col-md-12">
							<h6>Classes</h6>
							<ul class="list-unstyled mb-0 divide-li-2">
							<?php $all_classes=all_classes(); foreach ($all_classes as $classes) { ?>
							<li><a href=""><?php echo $classes['class_name'];?></a></li>
							<?php } ?>

							</ul>
						</div>
						<div class="col-lg-2 col-md-12">
							<h6>Resources</h6>
							<ul class="list-unstyled mb-0">
								<li><a href="<?php echo base_url('frequently-asked-questions'); ?>">FAQ</a></li>
								<li><a href="<?php echo base_url('terms-and-conditions'); ?>">Terms of Conditions</a></li>
								<li><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-12">
							<h6>Latest Tutorials</h6>
							<ul class="list-unstyled mb-0">
								<?php $list_tutorials=latest_tutorials(); foreach ($list_tutorials as $list_tutorial) { ?>
								<li><a href="<?php echo base_url('tutorial/').$list_tutorial['slug']; ?>"><?php echo $list_tutorial['title'];?></a></li>
							
								<?php }?>
							</ul>
						</div>
						<div class="col-lg-3 col-md-12">
							<h6 class="mb-2">Subscribe</h6>
							<div class="input-group">
								<input type="text" class="form-control " required id="footer_subscribe_email" placeholder="Email">
								<div class="input-group-append ">
									<button type="button" id="footer_subscribe_btn" class="btn btn-primary br-tr-7 br-br-7"> Subscribe </button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-dark-purple text-white p-0">
				<div class="container">
					<div class="row d-flex">
						<div class="col-lg-8 col-sm-12  mt-2 mb-2 text-left "> Copyright © 2020 <a href="#" class="fs-14 text-primary">TuitionPro.in</a>. All rights reserved. </div>
						<!-- <div class="col-lg-4 col-sm-12 ml-auto mb-2 mt-2">
							<ul class="social mb-0">
								<li> <a class="social-icon" href=""><i class="fa fa-facebook"></i></a> </li>
								<li> <a class="social-icon" href=""><i class="fa fa-twitter"></i></a> </li>
								<li> <a class="social-icon" href=""><i class="fa fa-rss"></i></a> </li>
								<li> <a class="social-icon" href=""><i class="fa fa-youtube"></i></a> </li>
								<li> <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a> </li>
								<li> <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a> </li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</footer>
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<script src="<?php echo asset_url();?>js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="<?php echo asset_url();?>plugins/bootstrap-4.3.1/js/popper.min.js"></script>
		<script src="<?php echo asset_url();?>plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="<?php echo asset_url();?>js/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="<?php echo asset_url();?>js/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="<?php echo asset_url();?>plugins/rating/jquery.rating-stars.js"></script>

		<!--Owl Carousel js -->
		<script src="<?php echo asset_url();?>plugins/owl-carousel/owl.carousel.js"></script>

		<!--Horizontal Menu-->
		<script src="<?php echo asset_url();?>plugins/horizontal-menu/horizontal.js"></script>

		<!--Counters -->
		<script src="<?php echo asset_url();?>plugins/counters/counterup.min.js"></script>
		<script src="<?php echo asset_url();?>plugins/counters/waypoints.min.js"></script>
		<script src="<?php echo asset_url();?>plugins/counters/numeric-counter.js"></script>

		<!--JQuery TouchSwipe js-->
		<script src="<?php echo asset_url();?>js/jquery.touchSwipe.min.js"></script>

		<!--Select2 js -->
		<script src="<?php echo asset_url();?>plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo asset_url();?>js/select2.js"></script>

		<!-- Cookie js -->
		<!-- <script src="<?php echo asset_url();?>plugins/cookie/jquery.ihavecookies.js"></script>
		<script src="<?php echo asset_url();?>plugins/cookie/cookie.js"></script> -->

		<!-- Count Down-->
		<script src="<?php echo asset_url();?>plugins/count-down/jquery.lwtCountdown-1.0.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo asset_url();?>plugins/scroll-bar/jquery.mCustomScrollbar.js"></script>

		<!-- sticky Js-->
		<script src="<?php echo asset_url();?>js/sticky.js"></script>

		<!-- Swipe Js-->
		<script src="<?php echo asset_url();?>js/swipe.js"></script>

		<!-- Owl Carousel Js-->
		<script src="<?php echo asset_url();?>js/owl-carousel.js"></script>

		<!-- Ion.RangeSlider -->
		<script src="<?php echo asset_url();?>plugins/jquery-uislider/jquery-ui.js"></script>
		<script src="<?php echo asset_url();?>plugins/jquery-uislider/jquery.ui.touch-punch.min.js"></script>

		<!-- Showmore Js-->
		<script src="<?php echo asset_url();?>js/jquery.showmore.js"></script>
		<script src="<?php echo asset_url();?>js/showmore.js"></script>
		<!-- Custom Js-->
		<script src="<?php echo asset_url();?>js/custom.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
			window.setTimeout(function(){
  $('iframe').contents().find('video').each(function () 
        {
            this.pause();
        });
}, 3000);

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}
		$('#subscribe_btn').on('click',function(){
		var subscribe_email = $('#subscribe_email').val();
		if(subscribe_email!="" && isValidEmailAddress( subscribe_email )){
				$.ajax({
		          url: "<?php echo base_url('subscribe-us');?>",
		          cache: false,
		          method:"POST",
		          data: {
		           'subscribe_email': subscribe_email
		          },
		          success: function( data ) {
		            if(data==1){
		            swal(
		            	{
							  icon: 'success',
							  title: 'Thanks for Subscribe Us',
							  text: 'You will recive notification from Us.'
						});
		            }else{
		            	swal(
							{

										  icon: 'error',
										  title: 'Please enter a valid email id',
										  text: 'You will recive notification from Us.'	
							});
		            }
		          }
		        }); 
			}else{
				swal(
				{

							  icon: 'error',
							  title: 'Please enter a valid email id',
							  text: 'You will recive notification from Us.'	
				});
			}
		});

		$('#footer_subscribe_btn').on('click',function(){
		var footer_subscribe_email = $('#footer_subscribe_email').val();
		if(footer_subscribe_email!="" && isValidEmailAddress( footer_subscribe_email )){
				$.ajax({
		          url: "<?php echo base_url('subscribe-us');?>",
		          cache: false,
		          method:"POST",
		          data: {
		           'subscribe_email': footer_subscribe_email
		          },
		          success: function( data ) {
		            if(data==1){
		            swal(
		            	{
							  icon: 'success',
							  title: 'Thanks for Subscribe Us',
							  text: 'You will recive notification from Us.'
						});
		            }else{
		            	swal(
							{

										  icon: 'error',
										  title: 'Please enter a valid email id',
										  text: 'You will recive notification from Us.'	
							});
		            }
		          }
		        }); 
			}else{
				swal(
				{

							  icon: 'error',
							  title: 'Please enter a valid email id',
							  text: 'You will recive notification from Us.'	
				});
			}
		});


		</script>
	</body>
</html>