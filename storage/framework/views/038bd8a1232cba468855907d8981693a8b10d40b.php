<?php $__env->startSection('content'); ?> 
<h3>Students Debts (Active Courses)</h3>
<script src="<?php echo e(asset('js/ligthtable.js')); ?>"></script>
<form class="form-inline pull-right srcTop">
 <input type="search" class="light-table-filter form-control " data-table="order-table" placeholder="Filter">
 </form>
 <legend></legend>
<div class="table table-bordered ">
<table  class="order-table table" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact Number</th>
									<th>Course</th>
									<th>Remain</th>



								</tr>
							</thead>
							<tbody>

								<?php
								foreach ($collects as $collect) {
								$course_col = App\Course::where('id','=',$collect->course_id)->get();
								foreach ($course_col as $courseol) {
								$course_cost = $courseol->course_cost;
								$obtained = $collect->obtained;
							}
							if ($obtained < $course_cost) {
							$student_due = App\Collect::where('obtained','=',$obtained)->where('student_id','=',$collect->student_id)->where('course_id','=',$collect->course_id)->get();
							$left_out = $course_cost - $obtained;

						} ?>
						<?php foreach($student_due as $student_due): ?>
						<?php $student_leftout = App\Student::where('id','=',$student_due->student_id)->first();
						$course = App\Course::where('id','=',$student_due->course_id)->first();
						?>
						
						<tr>
							<td><a href="<?php echo e(URL::to('student/' . $student_leftout->id )); ?>" class=""><?php echo e($student_leftout->student_name); ?></a></td>
							<td><?php echo e($student_leftout->student_contact_number); ?></td>
							<td><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></td>
							<td><?php echo e($left_out); ?></td>
						</tr>
								
								<?php endforeach; ?>
								<?php  } ?>

							</tbody>
						</table>
						</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>