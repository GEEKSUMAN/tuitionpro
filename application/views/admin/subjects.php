<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

							<h4 class="page-title float-left">Subjects</h4>
							<button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal4"><i class="ion-plus-circled" data-toggle="tooltip"  data-original-title="Add Subject"></i> Add</button>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">All Subjects</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class=" table table-striped table-bordered">
												<thead>
													<tr>
														<th>Name</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $all_subjects=all_subjects(); foreach ($all_subjects as $subjects) { ?>
													<tr>
														<td><?php echo $subjects['subject_name'];?></td>
														<td>
															<a class="btn btn-success edit-subject btn-sm text-white" data-toggle="modal" data-target="#exampleModal3" data-id="<?php echo $subjects['id'];?>" data-subject="<?php echo $subjects['subject_name'];?>" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a  data-link="<?php echo base_url('admin/subjects/delete/').$subjects['id'];?>" class="delete btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<?php } ?>
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
			<!-- edit subject Modal -->
			<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal3">Edit Subject</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('admin/subjects/edit'); ?>" method="post">
						<div class="modal-body">
							
								<div class="form-group">
									<label for="edit_subject_name" class="form-control-label">Subject:</label>
									<input type="text" name="edit_subject_name" class="form-control" id="edit_subject_name">
								</div>
								<input type="hidden" name="edit_subject_id" id="edit_subject_id" >
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
						</form>
					</div>
				</div>
			</div>
<!-- add subject Modal -->
			<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal4">Add Subject</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('admin/subjects/add'); ?>" method="post">
						<div class="modal-body">
							
								<div class="form-group">
									<label for="add_subject_name" class="form-control-label">Subject:</label>
									<input type="text" name="add_subject_name" class="form-control" id="add_subject_name">
								</div>
								
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add Subject</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- confirm delete-->
<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       Are you sure?
      </div>
      <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
    </div>
  </div>
</div>

<?php echo $footer; ?>
<script type="text/javascript">
$('.delete').on('click', function(e) {
  e.preventDefault();
  var link= $(this).data('link');
  $('#confirm').modal({
      backdrop: 'static',
      keyboard: false
  })
  .on('click', '#delete', function(e) {
   window.location.href=link;
    });
});
$(document).on( "click", '.edit-subject',function(e) {
    var subject= $(this).data('subject');
    var id = $(this).data('id');
    $("#edit_subject_id").val(id);
    $("#edit_subject_name").val(subject);
});
</script>