<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

							<h4 class="page-title float-left">Frequently Asked Questions</h4>
							<button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal4"><i class="ion-plus-circled" data-toggle="tooltip"  data-original-title="Add Subject"></i> Add</button>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Manage</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class=" table table-striped table-bordered">
												<thead>
													<tr>
														<th>Title</th>
														<th>Description</th>
														<th>Media</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($faqs as $faq) { ?>
													<tr>
														<td><?php echo $faq['title'];?></td>
														<td><?php echo $faq['description'];?></td>
														<td width="400">
														<div class="embed-responsive embed-responsive-16by9">
														  <iframe  class="embed-responsive-item" src="<?php if($faq['media']==""){$faq['media']='dummy.png';} echo base_url('uploads/faq/').$faq['media'];?>" allowfullscreen></iframe>
														</div></td>
														<td>
															<a class="btn btn-success edit-faq btn-sm text-white" data-toggle="modal" data-target="#exampleModal3" data-id="<?php echo $faq['faq_id'];?>" data-title="<?php echo $faq['title'];?>" data-description="<?php echo htmlentities($faq['description']);?>" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a  data-link="<?php echo base_url('admin/frequently-asked-questions/delete/').$faq['faq_id'];?>" class="delete btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
							<h5 class="modal-title" id="example-Modal3">Edit</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('admin/frequently-asked-questions/edit'); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							
								<div class="form-group">
									<label for="edit_title" class="form-control-label">Title:</label>
									<input type="text" name="edit_title" class="form-control" id="edit_title">
								</div>
								<div class="form-group">
							<label for="edit_media" class="form-control-label">Upload:</label>
							<input type="file" name="edit_media" class="form-control" id="edit_media">
						</div>
								<div class="form-group">
									<label for="edit_description" class="form-control-label">Description:</label>
									<textarea name="edit_description" class="form-control" id="edit_description"></textarea>
								</div>
								<input type="hidden" name="edit_faq_id" id="edit_faq_id" >
							
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
							<h5 class="modal-title" id="example-Modal4">Add</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?php echo base_url('admin/frequently-asked-questions/add'); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							
						<div class="form-group">
							<label for="add_title" class="form-control-label">Title:</label>
							<input type="text" name="add_title" class="form-control" id="add_title">
						</div>
						<div class="form-group">
							<label for="add_media" class="form-control-label">Upload:</label>
							<input type="file" name="add_media" class="form-control" id="add_media">
						</div>
						<div class="form-group">
							<label for="add_description" class="form-control-label">Description:</label>
							<textarea name="add_description" class="form-control" id="add_description"> </textarea>
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add</button>
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
<link rel="stylesheet" href="<?php echo asset_url();?>plugins/Rich-Text-Editor/richtext.min.css">
<script src="<?php echo asset_url();?>plugins/Rich-Text-Editor/jquery.richtext.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url();?>plugins/Rich-Text-Editor/custom-rich-text.js"></script>
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
$(document).on( "click", '.edit-faq',function(e) {
    var title= $(this).data('title');
    var description= $(this).data('description');
    var id = $(this).data('id');
    $("#edit_faq_id").val(id);
    $("#edit_title").val(title);
    $("#edit_description").text(description);

});
</script>