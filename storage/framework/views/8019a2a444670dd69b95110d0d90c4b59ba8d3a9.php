

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/avatars/<?php echo e($user->avatar); ?>"  style="width:100px; height:100px; float:left; border-radius:50%; margin-right: 25px;">
            <h2><?php echo e($user->name); ?>'s Profile</h2>
            <form enctype="multipart/form-data" action="profile" method="POST">
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>