<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

							<h4 class="page-title">Tutorials</h4>
							
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">All Tutorials</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class=" table table-striped table-bordered">
												<thead>
													<tr>
														<th>Title</th>
														<th>Category</th>
														<th>Subject</th>
														<th>Board</th>
														<th>Class</th>
														<th>Price</th>
														<th>Level</th>
														<th>Author</th>
														<th>Author's Email</th>
														<th>Status</th>
														<th>Date Added</th>
														<th>Action</th>

													</tr>
												</thead>
												<tbody>
													<?php foreach ($tutorials as $tutorial) { ?>
													<tr>
														<td><?php echo $tutorial['title'];?></td>
														<td><?php echo $tutorial['category'];?></td>
														<td><?php echo $tutorial['subject'];?></td>
														<td><?php echo $tutorial['boards'];?></td>
														<td><?php echo $tutorial['classes'];?></td>
														<td><?php if($tutorial['is_paid']=='N'){$tutorial['price']='Free';}echo $tutorial['price'];?></td>
														<td><?php echo $tutorial['level'];?></td>
														<td><?php echo get_full_name($tutorial['teacher_id']);?></td>
														<td><?php echo get_user_email($tutorial['teacher_id']);?></td>
														<td> <select data-id="<?php echo $tutorial['tutorials_id'];?>" id="status">
															<option <?php if($tutorial['status']==1){echo 'selected';}?> value="1">Published</option>
															<option <?php if($tutorial['status']==2){echo 'selected';}?> value="2">Deleted</option>	
															</select>

														</td>
														<td><?php echo $tutorial['date_added'];?></td>
														<td><a target="_blank" class="btn btn-info btn-sm text-white" data-toggle="tooltip" href="<?php echo base_url('tutorial/').$tutorial['slug']; ?>" data-original-title="View"><i class="fa fa-eye"></i></a>
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
<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       Are you sure?
      </div>
      <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary" id="confirm_btn">Confirm</button>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
    </div>
  </div>
</div>

<?php echo $footer; ?>
<script type="text/javascript">
$('#status').on('change', function(e) {
  e.preventDefault();
  var status= $(this).val();
  var tutorials_id=$(this).data('id');
  $('#confirm').modal({
      backdrop: 'static',
      keyboard: false
  })
  .on('click', '#confirm_btn', function(e) {
  	$.ajax({
          url: "<?php echo base_url('admin/tutorials/status');?>",
          cache: false,
          method:"POST",
          data: {
           'status': status,
           'tutorials_id':tutorials_id
          },
          success: function( data ) {
          	location.reload();
          }
        });
    });
});
</script>
