<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

							<h4 class="page-title float-left">Admin Credentials</h4>
							<button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal4"><i class="ion-plus-circled" data-toggle="tooltip"  data-original-title="Add Subject"></i> Change</button>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<span class="card-header bg-info text-white h4">Password</span>
										<p class="bg-grey text-dark h3"><?php echo $this->session->userdata('password'); ?></p>
										<span class="card-header bg-info text-white h4">Email</span>
										<p class="bg-grey text-dark h3"><?php echo $this->session->userdata('email'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--App-Content-->
			</div>

<!--  Modal -->
			<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal4">Change Credentials</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('admin/manage/credentials'); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
						<div class="form-group">
							<label for="change_email" class="form-control-label">Email:</label>
							<input type="text" value="<?php echo $this->session->userdata('email'); ?>" name="change_email" class="form-control" id="change_email">
						</div>
							
						<div class="form-group">
							<label for="change_password" class="form-control-label">Password:</label>
							<input type="text" value="<?php echo $this->session->userdata('password'); ?>" name="change_password" class="form-control" id="change_password">
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Change</button>
						</div>
						</form>
					</div>
				</div>
			</div>
<?php echo $footer; ?>
