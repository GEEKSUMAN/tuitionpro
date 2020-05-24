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
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a class="link" href="cars.html"></a>
								<img src="<?php echo asset_url();?>images/media/others/v5.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
									<span class="text-white bg-danger"> Rent</span>
								</div>
								<div class="item-card2-icons">
									<a href="cars.html" class="item-card2-icons-l bg-primary"> <i class="car car-honda"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart-o"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="cars.html" class="text-dark"><h4 class="mb-0">Union</h4></a>
										</div>
										<div class="d-flex">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, USA</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$789.00</span>
										</div>
										<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a>
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2300</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a class="link" href="cars.html"></a>
								<img src="<?php echo asset_url();?>images/media/others/dummy.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-gray"> Used</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-toyota"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="cars.html" class="text-dark"><h4 class="mb-0">Lioness</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
										</div>
										<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a>
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">3000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card2-img">
								<a class="link" href="cars.html"></a>
								<img src="<?php echo asset_url();?>images/media/others/b1.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-volkswagen"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="cars.html" class="text-dark"><h4 class="mb-0">Millenium</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
										</div>
										<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a>
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0 sold-out">
							<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">sold out</span></div>
							<div class="item-card2-img">
								<a class="link" href="cars.html"></a>
								<img src="<?php echo asset_url();?>images/media/others/v1.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-ferrari"></i></a>
									<a href="#" class="item-card2-icons-r wishlist"><i class="fa fa fa-heart-o"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="cars.html" class="text-dark"><h4 class="mb-0">Roamer</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
										</div>
										<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a>
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a class="link" href="cars.html"></a>
								<img src="<?php echo asset_url();?>images/media/others/f3.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-honda"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart-o"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="cars.html" class="text-dark"><h4 class="mb-0">Union</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
										</div>
										<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a>
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
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
					<h2>Best Tuitions in Top Cities</h2>
					<p>Find tutors in these cities</p>
				</div>
				<div class="row">
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-xl-0 box-shadow2">
							<img src="<?php echo asset_url();?>images/svgs/cities/001-statue-of-liberty.svg" alt="img" class="bg-pink-transparent">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0">USA</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-xl-0 mb-lg-5 box-shadow2">
							<img src="<?php echo asset_url();?>images/svgs/cities/017-taj-mahal.svg" alt="img" class="svg2 bg-purple-transparent">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0">India</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-xl-0 mb-lg-5 box-shadow2">
							<img src="<?php echo asset_url();?>images/svgs/cities/031-stonehenge.svg" alt="img" class="bg-warning-transparent">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0">England</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-lg-0 box-shadow2">
							<img src="<?php echo asset_url();?>images/svgs/cities/002-sydney-opera-house.svg" alt="img" class="bg-danger-transparent">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0">Sydney</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-sm-0 box-shadow2">
							<img src="<?php echo asset_url();?>images/svgs/cities/003-brandenburg-gate.svg" alt="img" class="bg-success-transparent">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0">Germany</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-0 box-shadow2">
							<img src="<?php echo asset_url();?>images/svgs/cities/010-great-wall-of-china.svg" alt="img" class="bg-info-transparent">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0">China</h4>
							</div>
						</a>
					</div>
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
					<p>Users</p>
				</div>
				<div id="defaultCarousel1" class="owl-carousel Card-owlcarousel owl-carousel-icons">
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php echo asset_url();?>images/media/others/ed1.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2019</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Persimmon</h4></a>
								<p>Lorem Ipsum available, quis exercitationem, enim ad Ipsum available, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php echo asset_url();?>images/users/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Joanne Nash</a>
										<small class="d-block text-muted">1 day ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php echo asset_url();?>images/media/others/j2.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Vroomting</h4></a>
								<p>Lorem Ipsum available, quis exercitationem, enim ad Ipsum available, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php echo asset_url();?>images/users/male/7.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Tanner Mallari</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php echo asset_url();?>images/media/others/ed2.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2019</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Wisteria</h4></a>
								<p>Lorem Ipsum available, quis exercitationem, enim ad Ipsum available, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php echo asset_url();?>images/users/female/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Aracely Bashore</a>
										<small class="d-block text-muted">5 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php echo asset_url();?>images/media/others/ed3.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2019</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Mercedes-Gainsboro</h4></a>
								<p>Lorem Ipsum available, quis exercitationem, enim ad Ipsum available, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php echo asset_url();?>images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Royal Hamblin</a>
										<small class="d-block text-muted">10 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php echo asset_url();?>images/media/others/j3.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Harlequini Dawn</h4></a>
								<p>Lorem Ipsum available, quis exercitationem, enim ad Ipsum available, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php echo asset_url();?>images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Rosita Chatmon</a>
										<small class="d-block text-muted">10 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="<?php echo asset_url();?>images/media/others/ed4.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2019</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Wisteria</h4></a>
								<p>Lorem Ipsum available, quis exercitationem, enim ad Ipsum available, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="<?php echo asset_url();?>images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Loyd Nolf</a>
										<small class="d-block text-muted">15 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Section-->
		<section class="sptb  bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Tutorials by Category</h2>
					<p>Find best tutorials</p>
				</div>
				<div class="row">
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 bg-primary box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/1.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">SUV</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 bg-secondary box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/2.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">MUV</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 bg-info box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/3.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Car Roof</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 bg-success box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/4.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Alto</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 bg-danger box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/5.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Ringer Ace</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 bg-purple box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/6.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Convertible</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center p-4 mb-lg-0 bg-blue box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/7.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Pick-up</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center mb-lg-0 p-4 bg-pink box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/8.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Luxary</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card mb-5  mb-xl-0  text-center p-4 bg-indigo box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/9.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Coupe</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center mb-lg-0 p-4 bg-orange box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/10.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Sport Car</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center mb-sm-0 p-4 bg-lime box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/11.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Mini Van</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="car-body-shapes card text-center mb-0 p-4 bg-dark box-shadow2">
							<div class="car-body-img"><img src="<?php echo asset_url();?>images/png/12.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Van</h4>
							</div>
						</a>
					</div>
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

		<!--latest Posts-->
		<section class="sptb2 border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Tutorials</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="<?php echo asset_url();?>images/media/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a Harlequini Dawn</a></h4>
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
		<!--latest Posts-->


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