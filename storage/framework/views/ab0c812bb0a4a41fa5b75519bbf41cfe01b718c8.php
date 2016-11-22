<?php $__env->startSection('page_heading','Teacher'); ?>
<?php $__env->startSection('content'); ?>
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('/student/'.$student->id)); ?>" > رجوع</a>
    <legend> </legend>
    <!--overview end -->
        <?php if( $col_obtained == $course->course_cost ): ?>
          <p>ok</p>
        <?php else: ?>
        <!-- start form -->
        <form action="<?php echo e(url ('/collect')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	<?php echo csrf_field(); ?>


      	<!-- Add Product -->
      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_name">إسم الطالب</label>
      	  <div class="col-md-5">
      	  <!-- <input id="student_name" name="student_name"  placeholder="student name" class="form-control input-md" value="<?php echo e($student->student_name); ?>" required="" type="text"> -->
          <input hidden="hidden" id="student_name" name="student_name" value="<?php echo e($student->student_name); ?>">
          <p><?php echo e($student->student_name); ?></p>
      	  </div>
      	</div>

        <!-- input student address-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="course_name">إسم الكورس</label>
      	  <div class="col-md-4">
      	  <!-- <input id="course_name" name="course_name" placeholder="course name" class="form-control input-md"  value="<?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?>" required="" type="text"> -->

          <input hidden="hidden" id="course_name" name="course_name" value="<?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?>">
          <p><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></p>
      	  </div>
      	</div>

        <div class="form-group">
      	  <label class="col-md-4 control-label" for="course_cost">سعر الكورس</label>
      	  <div class="col-md-2">
<!--       	  <input id="course_cost"  name="course_cost" placeholder="course cost" class="form-control input-md" value="<?php echo e($course->course_cost); ?>" required="" type="number">

 -->      <input hidden="hidden" id="course_cost" name="course_cost" value="<?php echo e($course->course_cost); ?>">
          <p><?php echo e($course->course_cost); ?></p>
 </div>
      	</div>


      	
		<div class="form-group">
		      	  <label class="col-md-4 control-label" for="obtained">المبلغ المستلم</label>
		      	  <div class="col-md-2">
		      	  <!-- <input id="obtained" disabled="disabled" name="obtained" placeholder="obtained" class="form-control input-md" value="<?php echo e($col_obtained); ?>" required="" type="number"> -->
              <p><?php echo e($col_obtained); ?></p>
		      	  </div>
		      	</div>
      	<!-- input student specialty -->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="remain">المبلغ المتبقي</label>
      	  <div class="col-md-2">
      	  <!-- <input id="remain" name="remain" disabled="disabled" value="<?php echo e($course->course_cost - $col_obtained); ?>" placeholder="remain " class="form-control input-md" required="" type="number"> -->
          <p><?php echo e($course->course_cost - $col_obtained); ?></p>
      	  </div>
      	</div>
      	<!-- input student educational level-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="payment">الدفع</label>
      	  <div class="col-md-2">
      	  <input id="obtained" name="obtained" placeholder="course cost" class="form-control input-md" required="" type="number">
      	  </div>
      	</div>

      	<!-- Button -->
      	<div class="form-group">
        		<label class="col-md-5 control-label" for="submit"></label>
        		<div class="col-md-5">
          		<button id="submit" name="submit" class="btn btn-primary">حفظ</button>
        		</div>
      	</div>
      	

      	</fieldset>
      	

      	 
      	</form>
        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>