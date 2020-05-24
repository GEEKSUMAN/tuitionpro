<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

							<h4 class="page-title">Users</h4>
							
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">All Users</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class=" table table-striped table-bordered">
												<thead>
													<tr>
														<th>Full Name</th>
														<th>Email</th>
														<th>Type</th>
														<th>Status</th>
														<th>Joined</th>
														
													</tr>
												</thead>
												<tbody>
													<?php foreach ($all_users as $user) { ?>
													<tr>
														<td><?php echo $user['full_name'];?></td>
														<td><?php echo $user['email'];?></td>
														<td><?php if($user['registration_type']=='1'){$user['registration_type']='Teacher';}else{ $user['registration_type']='Student / Parent';}echo $user['registration_type'];?></td>
														
														<td> <select data-id="<?php echo $user['id'];?>" id="status" >
															<option <?php if($user['status']==1){echo 'selected';}?> value="1">Active</option>
															<option <?php if($user['status']==2){echo 'selected';}?> value="2">InActive</option>	
															</select>

														</td>
														<td><?php echo $user['join_date'];?></td>
														
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
$('#example').on('change','#status', function(e) {
  e.preventDefault();
  var status= $(this).val();
  var users_id=$(this).data('id');
  $('#confirm').modal({
      backdrop: 'static',
      keyboard: false
  })
  .on('click', '#confirm_btn', function(e) {
  	$.ajax({
          url: "<?php echo base_url('admin/users/status');?>",
          cache: false,
          method:"POST",
          data: {
           'status': status,
           'users_id':users_id
          },
          success: function( data ) {
          	location.reload();
          }
        });
    });
});
</script>
