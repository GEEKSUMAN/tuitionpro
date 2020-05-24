<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
	<?php echo $sidebar; ?>
	<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							
						</div>
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card ">
									<div class="card-body text-center">
										<div class="counter-status dash3-counter">
											<div class="counter-icon bg-primary text-primary">
												<i class="icon icon-people text-white"></i>
											</div>
											<h5>Students</h5>
											<h2 class="counter mb-0"><?php print_r(total_user('2'));?></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card ">
									<div class="card-body text-center">
										<div class="counter-status dash3-counter">
											<div class="counter-icon bg-info text-info">
												<i class="icon icon-rocket text-white"></i>
											</div>
											<h5>Teachers</h5>
											<h2 class="counter mb-0"><?php print_r(total_user('1'));?></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card ">
									<div class="card-body text-center">
										<div class="counter-status dash3-counter">
											<div class="counter-icon bg-success text-success">
												<i class="icon icon-docs text-white"></i>
											</div>
											<h5>Total Users</h5>
											<h2 class="counter mb-0"><?php print_r(all_users());?></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card ">
									<div class="card-body text-center">
										<div class="counter-status dash3-counter">
											<div class="counter-icon bg-danger text-danger">
												<i class="icon icon-emotsmile text-white"></i>
											</div>
											<h5>Tutorials</h5>
											<h2 class="counter mb-0"><?php print_r(all_tutorials());?></h2>
										</div>
									</div>
								</div>
							</div>
						</div>			

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Subscribers</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive border-top mb-0 ">
											<table id="example" class="table table-bordered table-hover text-nowrap mb-0">
												<thead>
													<tr>
														<th>Order ID</th>
														<th>Category</th>
														<th>Date</th>
														<th>Price</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#89345</td>
														<td>Blanditiis Venue</td>
														<td>07-12-2018</td>
														<td class="font-weight-semibold fs-16">$893</td>
														<td>
															<a href="#" class="badge badge-danger">Pending</a>
														</td>
													</tr>
													<tr>
														<td>#39281</td>
														<td>Voluptates XUV300</td>
														<td>12-11-2018</td>
														<td class="font-weight-semibold fs-16">$254</td>
														<td>
															<a href="#" class="badge badge-primary">Completed</a>
														</td>
													</tr>
													<tr>
														<td>#35825</td>
														<td>Chittenden</td>
														<td>15-11-2018</td>
														<td class="font-weight-semibold fs-16">$352</td>
														<td>
															<a href="#" class="badge badge-success">Activated</a>
														</td>
													</tr>
													<tr>
														<td>#62391</td>
														<td>Possimus</td>
														<td>10-11-2018</td>
														<td class="font-weight-semibold fs-16">$643</td>
														<td>
															<a href="#" class="badge badge-danger">Pending</a>
														</td>
													</tr>
													<tr>
														<td>#92481</td>
														<td>Jeep Compass</td>
														<td>07-11-2018</td>
														<td class="font-weight-semibold fs-16">$392</td>
														<td>
															<a href="#" class="badge badge-primary">Activated</a>
														</td>
													</tr>
													<tr>
														<td>#29381</td>
														<td>Blanditiis Venue</td>
														<td>31-10-2018</td>
														<td class="font-weight-semibold fs-16">$295</td>
														<td>
															<a href="#" class="badge badge-danger">Pending</a>
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
				<!--App-Content-->
			</div>
<?php echo $footer; ?>