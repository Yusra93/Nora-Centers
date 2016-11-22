<!DOCTYPE html>
<html >
    <head>
        <title>Nora</title>
        <link rel="icon" href="<?php echo e(asset('loginicon.png')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" >
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>" >  
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/logo-nav.css')); ?>" > 
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" >


    </head>

    <body>

        <?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
            <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- jQuery -->
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    

    </body>
</html>
