<?php $__env->startSection('content'); ?>
 <i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('courses_names')); ?>" > رجوع </a>
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الوصف</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($coursename->course_name); ?></td>
                <td class="col-md-4"><?php echo e($coursename->course_description); ?></td>
                <td>
                    <a class="btn btn-small btn-info" href="<?php echo e(URL::to('courses_names/' . $coursename->id . '/edit')); ?>">تعديل</a>
                    <?php echo e(Form::open(array('url' => 'courses_names/' . $coursename->id, 'class' => 'pull-right'))); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('إزالة', array('class' => 'btn btn-danger'))); ?>

                    <?php echo e(Form::close()); ?>

                </td> 
            </tr>
            
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>