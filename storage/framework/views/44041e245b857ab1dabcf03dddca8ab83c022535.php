<?php $__env->startSection('page_heading','تعديل منتج'); ?>
<?php $__env->startSection('content'); ?>
           
<!--overview start-->
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('student/'.$student->id)); ?>" > رجوع </a>
    <!--overview end -->
 	<?php echo e(Form::model($student, array('route' => array('student.update', $student->id), 'method' => 'PUT','class' => 'form-horizontal'))); ?>



	<!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_name', 'Name', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('student_name', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_address', 'Address', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('student_address', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    <!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_specialty', 'Specialty', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-2">
	        	<?php echo e(Form::text('student_specialty', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    	<!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_educational_level', 'Educational Level', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('student_educational_level', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_age', 'Age', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('student_age', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    <!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_identity_number', 'Identity Number', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-2">
	        	<?php echo e(Form::text('student_identity_number', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    	<!-- Text input-->
		<div class="form-group">
	        <?php echo e(Form::label('student_email', 'Email', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('student_email', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>
    	<!-- Text input-->
    	<div class="form-group">
	        <?php echo e(Form::label('student_contact_number', 'Contact Number', array('class' => 'col-md-4 control-label'))); ?>

	        <div class="col-md-5">
	        	<?php echo e(Form::text('student_contact_number', null, array('class' => 'form-control input-md'))); ?>

	        </div>
    	</div>

	<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
	  		<div class="col-md-4">
	  			<?php echo e(Form::submit('Update', array('class' => 'btn btn-primary'))); ?>

			</div>
		</div>
    <?php echo e(Form::close()); ?>

           
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>