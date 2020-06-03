<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

							<h4 class="page-title float-left">Logo</h4>
							<button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal4"><i class="ion-plus-circled" data-toggle="tooltip"  data-original-title="Add Subject"></i> Change</button>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<img src="<?php echo base_url('uploads/logo/').get_logo();?>" class="header-brand-img" alt="TuitionPro.In">
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
							<h5 class="modal-title" id="example-Modal4">Logo</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('admin/manage/logo'); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							
						<div class="form-group">
							<label for="change_logo" class="form-control-label">Upload:</label>
							<input type="file" name="change_logo" class="form-control" id="change_logo">
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
