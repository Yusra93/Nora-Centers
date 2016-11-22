<?php $__env->startSection('page_heading','Teacher'); ?>
<?php $__env->startSection('content'); ?>
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('/')); ?>" > الرئيسية</a>
    <legend> </legend>
    <!--overview end -->

        <!-- start form -->
        <form action="<?php echo e(url ('teacher')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	<?php echo csrf_field(); ?>


      	<!-- Add Product -->

      	<!-- input teacher name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_name">اﻹسم</label>
      	  <div class="col-md-5">
      	  <input id="teacher_name" name="teacher_name" placeholder="name" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher address-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_address">العنوان</label>
      	  <div class="col-md-4">
      	  <input id="teacher_address" name="teacher_address" placeholder="address" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher course-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_courses">الكورسات</label>
      	  <div class="col-md-4">
      	  <input id="teacher_courses" name="teacher_courses" placeholder="course" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher identity number-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_identity_number">رقم الهوية</label>
      	  <div class="col-md-2">
      	  <input id="teacher_identity_number" name="teacher_identity_number" placeholder="identity number" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

      	<!-- input teacher email-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_email">البريد الإلكتروني</label>
      	  <div class="col-md-5">
      	  <input id="teacher_email" name="teacher_email" placeholder="email" class="form-control input-md" required="" type="text">
      	  </div>
      	</div>

        <!-- input teacher contact number-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="teacher_contact_number">رقم الهاتف</label>
      	  <div class="col-md-2">
      	  <input id="teacher_contact_number" name="teacher_contact_number" placeholder="contact number" class="form-control input-md" required="" type="text">
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