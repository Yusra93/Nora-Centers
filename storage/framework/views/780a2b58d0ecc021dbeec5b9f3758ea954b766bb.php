<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" >
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>" >  
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/logo-nav.css')); ?>" > 
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" >

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <img style="margin: auto; display: block;

        " height="150px" width="150px" src="<?php echo e(asset('loginicon.png')); ?>" alt="LOGO">
        <br>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <a class="btn btn-link" target="blank" href="http://www.obaaa.sd" style="margin: auto; display: block; height: 30px; width: 30px; " >
        <img 
        height="30px" width="30px" src="<?php echo e(asset('obaaalogo.png')); ?>" alt="obaaa" href="obaaa.sd">
        </a>
        <br>
        <div style=" text-align: center;"><b>NORA-CENTER version: 0.8</b></div>
        
    
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>