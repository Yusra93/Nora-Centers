<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo e(trans('List Users')); ?></div>

				<div class="panel-body">
				<a class="btn btn-small btn-success" href="<?php echo e(URL::to('users/create')); ?>"><?php echo e(trans('New User')); ?></a>
				<hr />
<?php if(Session::has('message')): ?>
	<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td><?php echo e(trans('user id')); ?></td>
            <td><?php echo e(trans('user name')); ?></td>
            <td><?php echo e(trans('user email')); ?></td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td>

                <a class="btn btn-small btn-info" href="<?php echo e(URL::to('users/' . $user->id . '/edit')); ?>"><?php echo e(trans('Edit')); ?></a>
                <?php echo Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')); ?>

                    <?php echo Form::hidden('_method', 'DELETE'); ?>

                    <?php echo Form::submit(trans('Delete'), array('class' => 'btn btn-warning')); ?>

                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>