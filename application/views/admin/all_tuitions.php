<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php echo $header; ?>
<?php echo $sidebar; ?>
<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <h4 class="page-title">tuitions</h4>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All tuitions</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class=" table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Teacher Name</th>
                                        <th>Teacher Email</th>
                                        <th>Student Name</th>
                                        <th>Student Email</th>
                                        <th>Contact Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_tuitions as $tuition) { ?>
                                        <tr>
                                            <td><?php echo $tuition['teacher_name']; ?></td>
                                            <td><?php echo $tuition['teacher_email']; ?></td>
                                            <td><?php echo $tuition['student_name']; ?></td>
                                            <td><?php echo $tuition['student_email']; ?></td>
                                            <td><?php echo $tuition['contact_date']; ?></td>
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
