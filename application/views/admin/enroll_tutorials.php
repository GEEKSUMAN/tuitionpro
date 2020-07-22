<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Enroll Tutorials</h4>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Enroll</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class=" table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Teacher Name</th>
                                        <th>Teacher Email</th>
                                        <th>Student Name</th>
                                        <th>Student Email</th>
                                        <th>Price (Rs)</th>
                                        <th>Enroll Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_enrolls as $all_enrolls) { ?>
                                        <tr>
                                            <td><?php echo get_tutorial_title($all_enrolls['tutorials_id']) ?></td>
                                            <td><?php echo get_full_name($all_enrolls['teacher_id']); ?></td>
                                            <td><?php echo get_user_email($all_enrolls['teacher_id']) ; ?></td>
                                            <td><?php echo get_full_name($all_enrolls['student_id']); ?></td>
                                            <td><?php echo get_user_email($all_enrolls['student_id']); ?></td>
                                            <td><?php $price= get_tutorial_price($all_enrolls['tutorials_id']); $price = ($price!=0) ? $price :'Free' ; echo $price; ?></td>
                                            <td><?php echo $all_enrolls['enroll_date']; ?></td>
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

<?php echo $footer; ?>
