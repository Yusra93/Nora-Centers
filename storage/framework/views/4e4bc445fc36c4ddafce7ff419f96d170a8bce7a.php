<?php $__env->startSection('content'); ?> 
<!--  -->

<!--  -->
<div class="row">
	<!-- <div class="col-xs-12 ">
		<div class="panel panel-default">
			<div class="panel-body ">
				<form class="form-inline " action="<?php echo e(url ('/student/search')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>

					<div class="form-group">
						<input list="student_list" placeholder="بحث عن طالب" name="student" class="form-control input-md">
						<datalist id="student_list">
							<?php foreach($students as $student): ?>
							<option value="<?php echo e($student->student_name); ?>">
								<?php endforeach; ?>
							</datalist>
							<button type="submit" class="btn btn-default" >Go</button> 

						</div>

					</form> 
				</div>

			</div>
		</div> -->

	</div>
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
				<span class="value">Students</span>
				<span class="value"><span><a href="/student"><?php echo e(App\Student::count()); ?></a></span></span>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
				<span class="value">Courses</span>
				<span class="value"><span><a href="/courses_names"><?php echo e(App\Course::count()); ?></a></span></span>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
				<span class="value">Teachers</span>
				<span class="value"><span><a href="/teacher"><?php echo e(App\Teacher::count()); ?></a></span></span>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6 ">
			<div class="rad-info-box">
				<span class="value">Results</span>
				<span class="value"><span><a href="/result"><?php echo e(App\Result::count()); ?></a></span></span>
			</div>
		</div>

	</div>


<!-- <div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-info">
		<div class="panel-heading ">عدد الطلاب : <a href="/student"><?php echo e(App\Student::count()); ?></a></div>
		<div class="panel-body">
		</div>
	</div>
</div>
<div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-danger">
		<div class="panel-heading ">عدد الكورسات : <a href="/courses_names"><?php echo e(App\Course::count()); ?></a></div>
		<div class="panel-body">
		</div>
	</div>
</div>
<div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-warning">
		<div class="panel-heading ">عدد الأساتذة : <a href="/teacher"><?php echo e(App\Teacher::count()); ?></a></div>
		<div class="panel-body">
		</div>
	</div>
</div>
<div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-success">
		<div class="panel-heading "><a href="/result"><?php echo e(App\Result::count()); ?></a></div>
		<div class="panel-body">
		</div>
	</div>
</div> -->

<div class="row">
	<div class="col-sm-6 ">
		<!-- <div class=".col-sm-8 pull-left">
			<div class=" col-sm-6 pull-left">
				<form action="" class="form-inline pull-left ">
					<div class="form-group">
						<input list="student_list" id="stdls" placeholder="بحث عن طالب" name="student" class="form-control input-md">
						<datalist id="">
							<?php foreach($students as $student): ?>
							<option value="<?php echo e($student->student_name); ?>">
								<?php endforeach; ?>
							</datalist>
							<button type="submit" class="btn btn-default" >Go</button> 

						</div>

					</form> 
				</div>
				<div class=" col-sm-6 pull-left">
					<form class="form-inline pull-right ">
						<div class="form-group">

							<input list="course_list" id="stdls" placeholder="بحث عن كورس" name="course_list" class="form-control input-md">
							<datalist id="course_list">
								<?php foreach($courses as $course): ?>
								<option value="<?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?>">
									<?php endforeach; ?>
								</datalist>
								<button type="submit" class="btn btn-default" >Go</button> 


							</div>
						</form> 
					</div>
				</div> 
				<div class="col-sm-8 pull-left">
					<br><br>
				</div> -->

				<div class="panel panel-info">
					<div class="panel-heading "><h3>Teachers Dues</h3> </div>
					<div class="panel-body">

						<table  class="order-table table" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact Number</th>


								</tr>
							</thead>
							<tbody>
								<?php foreach($teachers as $teacher): ?>
								<tr>
									<td><a href="<?php echo e(URL::to('teacher/' . $teacher->id )); ?>" class="" ><?php echo e($teacher->teacher_name); ?></a></td>
									<td><?php echo e($teacher->teacher_contact_number); ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(App\Teacher::count() > 5): ?>
						<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='<?php echo e(url ('teachers_claims')); ?>'" value="more..." />
						<?php else: ?>
						<?php endif; ?>
						<?php if(App\Teacher::count() >1): ?>
						<div class="panel-footer"><?php echo e(App\Teacher::count()); ?> Teachers</div>
						<?php else: ?>
						<div class="panel-footer"><?php echo e(App\Teacher::count()); ?> Teacher</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="panel panel-success" style="width: 550px;
				height: 250px;
				overflow: scroll;
				overflow-x: hidden " >
				<div class="panel-heading "><h3>Active Courses</h3></div>
				<div class="panel-body">
					<?php foreach($courses as $course): ?>
					<?php if($course->course_status == 1): ?>
					<a href="<?php echo e(URL::to('course/' . $course->id)); ?>">
						<div class="col-sm-4">

							<div class="panel panel-success">
								<div class="panel-heading "><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></div>
								<div class="panel-body">
								</div>

							</div>
						</div>
						<?php else: ?>
						<?php endif; ?>
						<?php endforeach; ?>

					</a>
				</div><?php /*<div ><?php echo e($courses->links()); ?></div>*/ ?></div>
				
				

				<div class="panel panel-info" style="width: 550px;
				height: 250px;
				overflow: scroll;
				overflow-x: hidden ">
				<div class="panel-heading "><h3>Suggested Courses</h3></div>
				<div class="panel-body">
					<?php foreach($courses as $course): ?>
					<?php if($course->course_status == 0): ?>
					<a href="<?php echo e(URL::to('course/' . $course->id)); ?>">
						<div class="col-sm-4">

							<div class="panel panel-info">
								<div class="panel-heading "><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></div>
								<div class="panel-body">
								</div>

							</div>
						</div>
						<?php else: ?>
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</a>
			</div>
			<div class="panel panel-danger" style="width: 550px;
			height: 250px;
			overflow: scroll;
			overflow-x: hidden ">
			<div class="panel-heading "><h3>Finshed Courses</h3></div>
			<div class="panel-body">
				<?php foreach($courses as $course): ?>
				<?php if($course->course_status == 2): ?>
				<a href="<?php echo e(URL::to('course/' . $course->id)); ?>">
					<div class="col-sm-4">

						<div class="panel panel-danger">
							<div class="panel-heading "><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></div>
							<div class="panel-body">
							</div>

						</div>
					</div>
					<?php else: ?>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 ">
		<div class=".col-sm-4 " >


			<div class="panel panel-danger">

				<div class="panel-heading "><h3>Students Debts (Active Courses)</h3></div>
				<div class="panel-body">


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
							$count=0;
							foreach ($collects as $collect) {
								$course_col = App\Course::where('id','=',$collect->course_id)->where('course_status','=',"1")->get();
								foreach ($course_col as $courseol) {

									$course_cost = $courseol->course_cost;
									$obtained = $collect->obtained;
								}
								if ($obtained < $course_cost) {
									$student_due = App\Collect::where('obtained','=',$obtained)->where('student_id','=',$collect->student_id)->where('course_id','=',$collect->course_id)->get();
									$left_out = $course_cost - $obtained;

								}
								else{
									$student_due = null;
								} ?>
								<?php if($student_due != null): ?>
								<?php foreach($student_due as $student_due): ?>
								<?php $student_leftout = App\Student::where('id','=',$student_due->student_id)->first();
								$course = $courseol;
								$count++;
								//echo $courseol;

								?>

								<?php if($count >5 ): ?>
								<?php break; ?>
								<?php endif; ?>


								<tr>
									<td><a href="<?php echo e(URL::to('student/' . $student_leftout->id )); ?>" class=""><?php echo e($student_leftout->student_name); ?></a></td>
									<td><?php echo e($student_leftout->student_contact_number); ?></td>
									<td><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></td>
									<td><?php echo e($left_out); ?></td>
								</tr>
								

								<?php endforeach; ?>
								<?php else: ?>
								<?php endif; ?>
								<?php  } ?>

							</tbody>
						</table>
						<?php if($count > 5): ?>
						<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='<?php echo e(url ('students_debts')); ?>'" value="more..." />
						<?php else: ?>
						<?php endif; ?>
					</div>
					<?php /*<div ><?php echo e($collects->links()); ?></div>*/ ?>
					<?php if($count > 1): ?>
					<div class="panel-footer"><?php echo e($count); ?> Students</div>
					<?php else: ?>
					<div class="panel-footer"><?php echo e($count); ?> Student</div>
					<?php endif; ?>
				</div>

				<div class="panel panel-danger">

					<div class="panel-heading "><h3>Students Debts (Finshed Courses)</h3></div>
					<div class="panel-body">


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
								$fcount=0;
								foreach ($collects as $collect) {
									$course_col = App\Course::where('id','=',$collect->course_id)->get();
									foreach ($course_col as $courseol) {

										$course_cost = $courseol->course_cost;
										$obtained = $collect->obtained;
									}
									if ($obtained < $course_cost) {
										$student_due = App\Collect::where('obtained','=',$obtained)->where('student_id','=',$collect->student_id)->where('course_id','=',$collect->course_id)->get();
										$left_out = $course_cost - $obtained;

									}
									else{
										$student_due = null;
									} ?>
									<?php if($student_due != null): ?>
									<?php foreach($student_due as $student_due): ?>
									<?php $student_leftout = App\Student::where('id','=',$student_due->student_id)->first();
									$course = App\Course::where('id','=',$student_due->course_id)->first();


									?>

									<?php if($fcount >5 ): ?>
									<?php break; ?>
									<?php endif; ?>

									<?php if($course->course_status == 2): ?>
									<tr>
										<td><a href="<?php echo e(URL::to('student/' . $student_leftout->id )); ?>" class=""><?php echo e($student_leftout->student_name); ?></a></td>
										<td><?php echo e($student_leftout->student_contact_number); ?></td>
										<td>  <?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></td>
										<td><?php echo e($left_out); ?></td>
										<?php $fcount++;?>
									</tr>
									<?php else: ?>

									<?php endif; ?>

									<?php endforeach; ?>
									<?php else: ?>
									<?php endif; ?>
									<?php  } ?>

								</tbody>
							</table>
							<?php if($fcount > 5): ?>
							<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='<?php echo e(url ('finshed_students_debts')); ?>'" value="more..." />
							<?php else: ?>
							<?php endif; ?>
						</div>
						<?php /*<div ><?php echo e($collects->links()); ?></div>*/ ?>
						<?php if($fcount > 1): ?>
						<div class="panel-footer"><?php echo e($fcount); ?> Students</div>
						<?php else: ?>
						<div class="panel-footer"><?php echo e($fcount); ?> Student</div>
						<?php endif; ?>
					</div>


				</div> 
			</div>
		</div>
<!-- <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-table.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-table-editable.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-table-export.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrapfilter.js')); ?>"></script> -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>