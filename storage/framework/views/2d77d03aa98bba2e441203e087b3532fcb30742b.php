

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo e(trans('New user')); ?></div>
				<div class="panel-body">
					<?php echo Html::ul($errors->all()); ?>


					<?php echo Form::open(array('url' => 'users')); ?>


					<div class="form-group">
					<?php echo Form::label('name', trans('User name')); ?>

					<input type="text" class="form-control" name="name" required="required" placeholder="Name">
					</div>
					

					<div class="form-group">
					<?php echo Form::label('email', trans('Email')); ?>

					
					<input type="email" class="form-control" name="email" required="required" placeholder="Email">
					
					</div>

					<div class="form-group">
					<?php echo Form::label('password', trans('Password')); ?>

					<input type="password" class="form-control" name="password" required="required" placeholder="Password">
					</div>

					<div class="form-group">
					<?php echo Form::label('password_confirmation', trans('Confirm_password')); ?>

					<input type="password" class="form-control" name="password_confirmation" required="required" placeholder="Confirm Password">
					</div>
					<div class="form-group">
					<?php echo Form::label('role', trans('Role')); ?>

					<select class="form-control" name="role" >
                                      <option value="1" >Admin</option>
                                      <option value="2" >Employee</option>
                                      <option value="3" >Teacher</option>
                                    </select>
                     </div>
					<?php echo Form::submit(trans('Submit'), array('class' => 'btn btn-primary')); ?>


					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>