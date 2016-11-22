<?php $__env->startSection('content'); ?>
 <i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('courses_names')); ?>" > رجوع </a>
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>إسم الكورس</th>
                <th>إسم الأستاذ</th>
                <th>السعر</th>
                <th>الغرفة</th>
                <th>البداية</th>
                <th>النهاية</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e(App\CoursesNames::find($course->course_id)->course_name); ?></td>
                <td><?php echo e(App\Teacher::find($course->teacher_id)->teacher_name); ?></td>
                <td><?php echo e($course->course_cost); ?> SDG</td>
                <td><?php echo e($course->course_room); ?></td>
                <td><?php echo e($course->course_begin); ?></td>
                <td><?php echo e($course->course_end); ?></td>
                <td>
                    
                </td> 

            </tr>
            </tr>
            
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>