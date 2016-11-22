<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo e(trans('Update user')); ?></div>

				<div class="panel-body">
					<?php echo Html::ul($errors->all()); ?>


					<?php echo Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')); ?>

					<div class="form-group">
					<?php echo Form::label('name', trans('User name')); ?>

					<?php echo Form::text('name', null, array('class' => 'form-control')); ?>

					</div>

					<div class="form-group">
					<?php echo Form::label('email', trans('Email')); ?>

					<?php echo Form::text('email', null, array('class' => 'form-control')); ?>

					</div>

					<div class="form-group">
					<?php echo Form::label('password', trans('Password')); ?>

					<input type="password" class="form-control" required="required" name="password" placeholder="Password">
					</div>

					<div class="form-group">
					<?php echo Form::label('password_confirmation', trans('Confirm_password')); ?>

					<input type="password" class="form-control" required="required" name="password_confirmation" placeholder="Confirm Password">
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