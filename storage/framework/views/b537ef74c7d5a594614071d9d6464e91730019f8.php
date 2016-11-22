<?php $__env->startSection('page_heading','Student'); ?>
<?php $__env->startSection('content'); ?>
<h3><?php echo e(App\CourseName::find(App\Course::find($courseid)->courses_names_id)->course_name); ?></h3>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>Student Nmae</th>
	       <?php foreach($course_components as $course_component): ?>
	         <th><?php echo e($course_component->course_component); ?></th>
	         <input hidden="hidden" id="components[]" name="components[]" value=" <?php echo e($course_component->id); ?>">
	       <?php endforeach; ?>
	      <th>Total Degree</th>
	      
	  
	  </thead>
	  <tbody>
	   
	       <?php foreach($students as $student): ?>
	        	<tr><th><input hidden="hidden" type="text" name="sname[]" value="<?php echo e(App\Student::find($student->student_id)->student_name); ?>" >

          <p><?php echo e(App\Student::find($student->student_id)->student_name); ?></p></th>
	        	<input hidden="hidden" id="course_id" name="course_id" value=" <?php echo e($student->course_id); ?>">
	       <?php foreach($course_components as $course_component): ?>
	       <?php $dgr= App\Degree::where('student_id','=',$student->student_id)->where('course_component_id','=',$course_component->id)->first();?>
	       	<td><input disabled="disabled" type="text" name="degrees[]" value="<?php echo e($dgr->degree); ?>" class="form-control input-md"></td>
	          <?php endforeach; ?>
	          <?php $total= App\Result::where('course_id','=',$courseid)->first();?>
	          <td><input disabled="disabled" type="text" name="degrees[]" value="<?php echo e($total->total_degree); ?>" class="form-control input-md"></td></tr>
	       <?php endforeach; ?>
	  </tbody>
	</table>
	<!-- <a href="javascript:window.print()"onclick="window.print();return false" class="btn btn-primary"><h5>print</h5></a> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>