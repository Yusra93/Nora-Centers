<?php $__env->startSection('page_heading','Student'); ?>
<?php $__env->startSection('content'); ?>
<?php
$result = App\Result::where('course_id','=',$id)->first();
?>
<?php if($result == null): ?>
<form action="<?php echo e(url ('result')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <fieldset>
   <?php echo csrf_field(); ?>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>اسم الطالب</th>
	       <?php foreach($course_components as $course_component): ?>
	         <th><?php echo e($course_component->course_component); ?></th>
	         <input hidden="hidden" id="components[]" name="components[]" value=" <?php echo e($course_component->id); ?>">
	       <?php endforeach; ?>
	     
	      
	  
	  </thead>
	  <tbody>
	   <tr>
	     
	    </tr>
	       <?php foreach($students as $student): ?>
	        	<tr><th><input hidden="hidden" type="text" name="sname[]" value="<?php echo e(App\Student::find($student->student_id)->student_name); ?>" >

          <p><?php echo e(App\Student::find($student->student_id)->student_name); ?></p></th>
	        	<input hidden="hidden" id="course_id" name="course_id" value=" <?php echo e($student->course_id); ?>">
	       <?php foreach($course_components as $course_component): ?>
	       <?php $dgr= App\Degree::where('student_id','=',$student->student_id)->where('course_component_id','=',$course_component->id)->first();?>
	       <?php if($dgr === null): ?>
	       	<td><input type="text" name="degrees[]" value="0" class="form-control input-md"></td>
	       	<?php else: ?>
	       	<td><input type="text" name="degrees[]" value="<?php echo e($dgr->degree); ?>" class="form-control input-md"></td>
	       	<?php endif; ?>
	          <?php endforeach; ?>
	          </tr>
	       <?php endforeach; ?>
	        
	  </tbody>
	</table>
<form action="">
  <input type="radio" name="check" value="0" checked> Update<br>
  <input type="radio" name="check" value="1">Issue Result<br>

</form>

  <input type="radio" name="endcheck" value="1"> End Course<br>


	<div class="form-group">
	            <label class="col-md-5 control-label" for="submit"></label>
	            <div class="col-md-5">
	              <button id="submit" name="submit" class="btn btn-primary">Save</button>
	            </div>
	        </div>
  
        </fieldset>
        </form>
<?php else: ?>
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>Student Name</th>
	       <?php foreach($course_components as $course_component): ?>
	         <th><?php echo e($course_component->course_component); ?></th>
	         <input hidden="hidden" id="components[]" name="components[]" value=" <?php echo e($course_component->id); ?>">
	       <?php endforeach; ?>
	     
	      
	  
	  </thead>
	  <tbody>
	   <tr>
	     
	    </tr>
	       <?php foreach($students as $student): ?>
	        	<tr><th><input hidden="hidden" type="text" name="sname[]" value="<?php echo e(App\Student::find($student->student_id)->student_name); ?>" >

          <p><?php echo e(App\Student::find($student->student_id)->student_name); ?></p></th>
	        	<input hidden="hidden" id="course_id" name="course_id" value=" <?php echo e($student->course_id); ?>">
	       <?php foreach($course_components as $course_component): ?>
	       <?php $dgr= App\Degree::where('student_id','=',$student->student_id)->where('course_component_id','=',$course_component->id)->first();?>
	       <?php if($dgr === null): ?>
	       	<td><input type="text" name="degrees[]" value="0" class="form-control input-md"></td>
	       	<?php else: ?>
	       	<td><input disabled="disabled" type="text" name="degrees[]" value="<?php echo e($dgr->degree); ?>" class="form-control input-md"></td>
	       	<?php endif; ?>
	          <?php endforeach; ?>
	          </tr>
	       <?php endforeach; ?>
	        
	  </tbody>
	</table>

<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>