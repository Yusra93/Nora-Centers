
<?php $__env->startSection('page_heading','Teacher'); ?>
<?php $__env->startSection('content'); ?>
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('/student/'.$student->id)); ?>" > Back</a>
    <legend> </legend>
    <!--overview end -->
        <?php if( $col_obtained == $course->course_cost ): ?>
          <p>ok</p>
          <?php $course_result= App\Course::find($course->id);
            
          ?>
        <?php if($course_result->result == 1): ?>
         <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Name</th>
         <?php foreach($course_components as $course_component): ?>
           <th><?php echo e($course_component->course_component); ?></th>
           <input hidden="hidden" id="components[]" name="components[]" value=" <?php echo e($course_component->id); ?>">
         <?php endforeach; ?>
        <th>Total Degree</th>
        
    
    </thead>
    <tbody>
     
            <tr><th>

          <p><?php echo e($student->student_name); ?></p></th>
            <input hidden="hidden" id="course_id" name="course_id" value=" <?php echo e($student->course_id); ?>">
         <?php foreach($course_degrees as $course_degree): ?>
        
          <td><input disabled="disabled" type="text" name="degrees[]" value="<?php echo e($course_degree->degree); ?>" class="form-control input-md"></td>
            <?php endforeach; ?>
            
            <td><input disabled="disabled" type="text" name="degrees[]" value="<?php echo e($total); ?>" class="form-control input-md"></td></tr>
         
    </tbody>
  </table>
 
<?php endif; ?>
        <?php else: ?>
        <!-- start form -->
        <form action="<?php echo e(url ('/collect')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	<?php echo csrf_field(); ?>


      	<!-- Add Product -->
      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_name">Student Name</label>
      	  <div class="col-md-5">
      	  <!-- <input id="student_name" name="student_name"  placeholder="student name" class="form-control input-md" value="<?php echo e($student->student_name); ?>" required="" type="text"> -->
          <input hidden="hidden" id="student_name" name="student_name" value="<?php echo e($student->student_name); ?>">
          <p><?php echo e($student->student_name); ?></p>
      	  </div>
      	</div>

        <!-- input student address-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="course_name">Course Name</label>
      	  <div class="col-md-4">
      	  <!-- <input id="course_name" name="course_name" placeholder="course name" class="form-control input-md"  value="<?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?>" required="" type="text"> -->

          <input hidden="hidden" id="course_name" name="course_name" 
          value="<?php echo e($course->id); ?>">
          <p><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></p>
      	  </div>
      	</div>

        <div class="form-group">
      	  <label class="col-md-4 control-label" for="course_cost">Course Cost</label>
      	  <div class="col-md-2">
<!--       	  <input id="course_cost"  name="course_cost" placeholder="course cost" class="form-control input-md" value="<?php echo e($course->course_cost); ?>" required="" type="number">

 -->      <input hidden="hidden" id="course_cost" name="course_cost" value="<?php echo e($course->course_cost); ?>">
          <p><?php echo e($course->course_cost); ?></p>
 </div>
      	</div>


      	
		<div class="form-group">
		      	  <label class="col-md-4 control-label" for="obtained">Obtained</label>
		      	  <div class="col-md-2">
		      	  <!-- <input id="obtained" disabled="disabled" name="obtained" placeholder="obtained" class="form-control input-md" value="<?php echo e($col_obtained); ?>" required="" type="number"> -->
              <p><?php echo e($col_obtained); ?></p>
		      	  </div>
		      	</div>
      	<!-- input student specialty -->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="remain">Remained</label>
      	  <div class="col-md-2">
      	  <!-- <input id="remain" name="remain" disabled="disabled" value="<?php echo e($course->course_cost - $col_obtained); ?>" placeholder="remain " class="form-control input-md" required="" type="number"> -->
          <p><?php echo e($course->course_cost - $col_obtained); ?></p>
      	  </div>
      	</div>
      	<!-- input student educational level-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="payment">Payment</label>
      	  <div class="col-md-2">
      	  <input id="obtained" name="obtained" placeholder="Pay" class="form-control input-md" required="" type="number">
      	  </div>
      	</div>

      	<!-- Button -->
      	<div class="form-group">
        		<label class="col-md-5 control-label" for="submit"></label>
        		<div class="col-md-5">
          		<button id="submit" name="submit" class="btn btn-primary">Save</button>
              <input type="button" class="btn btn-default" onclick="location.href='<?php echo e(url ('colprint')."/"."$student->id/$course->id"); ?>';" value="Issu a Pill" />
        		</div>
      	</div>
      	

      	</fieldset>
      	

      	 
      	</form>
        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>