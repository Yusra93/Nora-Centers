<?php $__env->startSection('page_heading','تعديل منتج'); ?>
<?php $__env->startSection('content'); ?>
           
<!--overview start-->
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('teacher/'.$teacher->id)); ?>" > رجوع </a>
    <!--overview end -->
 	<?php echo e(Form::model($teacher, array('route' => array('teacher.update', $teacher->id), 'method' => 'PUT','class' => 'form-horizontal'))); ?>



	<!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('teacher_name', 'اﻹسم', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('teacher_name', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('teacher_address', 'العنوان', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('teacher_address', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    <!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('teacher_identity_number', 'رقم الهوية', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-2">
	        	<?php echo e(Form::text('teacher_identity_number', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    	<!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('teacher_email', 'البريد الإلكتروني', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('teacher_email', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    	<!-- Text input-->
    	<div class="form-group">
	        <?php echo e(Form::label('teacher_contact_number', 'رقم الهاتف', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('teacher_contact_number', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>

	<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
	  		<div class="col-md-4">
	  			<?php echo e(Form::submit('تحديث', array('class' => 'btn btn-primary'))); ?>

			</div>
		</div>
    <?php echo e(Form::close()); ?>

           
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>