<?php $__env->startSection('page_heading','Student'); ?>
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/ligthtable.js')); ?>"></script>

<input type="button" class="btn btn-default" onclick="location.href='<?php echo e(url ('student/create')); ?>';" value="New Student" />
<form class="form-inline pull-right srcTop">
 <input type="search" class="light-table-filter form-control " data-table="order-table" placeholder="Filter">
 </form>
 <?php if(Session::has('message')): ?>
    <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>
    <legend> </legend>
    <div class="table table-bordered ">
    <table  class="order-table table" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
            <tr>
                <td><a href="<?php echo e(URL::to('student/' . $student->id )); ?>" class="" ><?php echo e($student->student_name); ?></a></td>
                <td><?php echo e($student->student_address); ?></td>
                <td><?php echo e($student->student_contact_number); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>