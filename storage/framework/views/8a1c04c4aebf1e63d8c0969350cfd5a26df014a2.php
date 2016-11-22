<?php $__env->startSection('page_heading','Student'); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url ('save_add_course')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        <?php echo csrf_field(); ?>


        <!-- Add Product -->
        <div class="form-group">
            
            <input hidden="hidden" id="student_id" name="student_id" value=" <?php echo e($id); ?>">
        </div> 

        <div class="form-group">
            <label class="col-md-4 control-label " for="student">Student Name</label>
            <div class="col-md-2">
            <input class="form-control input-md-4" disabled="disabled" id="student" name="course" value=" <?php echo e(App\Student::find($id)->student_name); ?>">
             </div>
        </div> 

        <div class="form-group">
          <label class="col-md-4 control-label" for="course_id">Course Name</label>
          <div class="col-md-4">
            <select id="course_id" name="course_id" class="form-control" required="true">
              <?php foreach($courses as $course): ?>
                 <?php $course_id=$course->id; ?>
                  <option value="<?php echo e($course_id); ?>"><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="submit"></label>
            <div class="col-md-5">
              <button id="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
  
        </fieldset>
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>