<?php $__env->startSection('page_heading','Student'); ?>
<?php $__env->startSection('content'); ?>
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('/student')); ?>" > Back</a>
    <legend> </legend>
    <!--overview end -->
<?php if(Session::has('message')): ?>
  <p class="alert <?php echo e(Session::get('alert-class', 'alert-danger')); ?>"><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>
        <!-- start form -->
        <form action="<?php echo e(url ('student')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	<?php echo csrf_field(); ?>


      	<!-- Add Product -->

      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_name">Name</label>
      	  <div class="col-md-5">
      	  <input id="student_name" name="student_name" placeholder="name" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student address-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_address">Address</label>
      	  <div class="col-md-4">
      	  <input id="student_address" name="student_address" placeholder="address" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student specialty-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_specialty">Specialty</label>
      	  <div class="col-md-4">
      	  <input id="student_specialty" name="student_specialty" placeholder="specialty" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

      	<!-- input student educational level-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_educational_level">Educational Level</label>
      	  <div class="col-md-5">
      	  <input id="student_educational_level" name="student_educational_level" placeholder="educational level" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student age-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_age">Age</label>
      	  <div class="col-md-2">
      	  <input id="student_age" name="student_age" placeholder="age" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student identity number-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_identity_number">Identity Number</label>
      	  <div class="col-md-2">
      	  <input id="student_identity_number" name="student_identity_number" placeholder="identity number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

<div class="form-group">
          <label class="col-md-4 control-label" for="teacher_id">Course Name</label>
          <div class="col-md-4">
            <select id="course_id" name="course_id" class="form-control" required="true">
            <option disabled selected >Select Course</option>
              <?php foreach($courses as $course): ?>
                 <?php $course_id=$course->id; ?>
                  <option value="<?php echo e($course_id); ?>"><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

      	<!-- input student email-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_email">Email</label>
      	  <div class="col-md-5">
      	  <input id="student_email" name="student_email" placeholder="email" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student contact number-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_contact_number">Contact Number</label>
      	  <div class="col-md-2">
      	  <input id="student_contact_number" name="student_contact_number" placeholder="contact number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>


      	<!-- ----------------------------------------------------------------------------------- -->

      	<!-- Button -->
      	<div class="form-group">
        		<label class="col-md-5 control-label" for="submit"></label>
        		<div class="col-md-5">
          		<button id="submit" name="submit" class="btn btn-primary">Save</button>
        		</div>
      	</div>

      	</fieldset>
      	</form>
        <!-- End form--> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>