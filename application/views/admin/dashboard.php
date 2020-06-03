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
														<th>Sl.No</th>
														<th>Email</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody>
													<?php $a=1; foreach($subscribers as $subscriber) { ?>
													<tr>
														<td><?php echo $a;?></td>
														<td><?php echo $subscriber['email'];?></td>
														<td><?php echo $subscriber['date'];?></td>
														
													</tr>
													<?php $a++; }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contact Us</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive border-top mb-0 ">
											<table id="example2" class="table table-bordered table-hover text-nowrap mb-0">
												<thead>
													<tr>
														<th>Sl.No</th>
														<th>Full Name</th>
														<th>Email</th>
														<th>Message</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody>
													<?php $a=1; foreach($contact_us as $contact) { ?>
													<tr>
														<td><?php echo $a;?></td>
														<td><?php echo $contact['full_name'];?></td>
														<td><?php echo $contact['email'];?></td>
														<td><?php echo $contact['message'];?></td>
														<td><?php echo $contact['date'];?></td>
														
													</tr>
													<?php $a++; }?>
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