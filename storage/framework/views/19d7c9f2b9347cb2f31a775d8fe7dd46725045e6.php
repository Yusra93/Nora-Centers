<?php $__env->startSection('content'); ?>
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('/')); ?>" > الرئيسية</a>
    <legend> </legend>
    <!--overview end -->

        <!-- start form -->
        <form action="<?php echo e(url ('student')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	<?php echo csrf_field(); ?>


      	<!-- Add Product -->

      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_name">اﻹسم</label>
      	  <div class="col-md-5">
      	  <input id="student_name" name="student_name" placeholder="name" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student weight-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_address">العنوان</label>
      	  <div class="col-md-4">
      	  <input id="student_address" name="student_address" placeholder="address" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student price-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_specialty">التخصص</label>
      	  <div class="col-md-4">
      	  <input id="student_specialty" name="student_specialty" placeholder="specialty" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_educational_level">المستوى التعليمي</label>
      	  <div class="col-md-5">
      	  <input id="student_educational_level" name="student_educational_level" placeholder="educational level" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student weight-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_age">العمر</label>
      	  <div class="col-md-2">
      	  <input id="student_age" name="student_age" placeholder="age" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student price-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_identity_number">رقم الهوية</label>
      	  <div class="col-md-2">
      	  <input id="student_identity_number" name="student_identity_number" placeholder="identity number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_email">البريد الإلكتروني</label>
      	  <div class="col-md-5">
      	  <input id="student_email" name="student_email" placeholder="email" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input student weight-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_contact_number">رقم الهاتف</label>
      	  <div class="col-md-2">
      	  <input id="student_contact_number" name="student_contact_number" placeholder="contact number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>


      	<!-- ----------------------------------------------------------------------------------- -->

      	<!-- Button -->
      	<div class="form-group">
        		<label class="col-md-5 control-label" for="submit"></label>
        		<div class="col-md-5">
          		<button id="submit" name="submit" class="btn btn-primary">حفظ</button>
        		</div>
      	</div>

      	</fieldset>
      	</form>
        <!-- End form--> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>