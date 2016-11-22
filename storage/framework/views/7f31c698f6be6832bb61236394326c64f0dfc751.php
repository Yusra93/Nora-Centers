<?php $__env->startSection('content'); ?>
 <i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('courses_names')); ?>" > Back </a>
 <input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='<?php echo e(url ('add_student/' . $course->id )); ?>'" value="Add Student" />
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Teacher Name</th>
                <th>Cost</th>
                <th>Room</th>
                <th>Begin</th>
                <th>End</th>
                <th>Subjects</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php if($course->course_status >= 1): ?>
                <td><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></td>
                <td><?php echo e(App\Teacher::find($course->teacher_id)->teacher_name); ?></td>
                <td><?php echo e($course->course_cost); ?> SDG</td>
                <td><?php echo e($course->course_room); ?></td>
                <td><?php echo e($course->course_begin); ?></td>
                <td><?php echo e($course->course_end); ?></td>
               
                <td>
                   <?php foreach($subjects as $subject): ?>
                      <?php echo e($subject->course_component); ?><br>
                   <?php endforeach; ?>
                </td>
                 <td><?php echo e($course->course_time); ?></td>
                <td><a class="btn btn-small btn-info" href="<?php echo e(URL::to('course/' . $course->id . '/edit')); ?>">Edit</a>
                        <?php echo e(Form::open(array('url' => 'course/' . $course->id, 'class' => 'pull-right'))); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('Delete', array('class' => 'btn btn-danger'))); ?>

                        <?php echo e(Form::close()); ?></td>
                <?php else: ?>
                <td><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td><a class="btn btn-small btn-info" href="<?php echo e(URL::to('course/' . $course->id . '/edit')); ?>">Edit</a>
                        <?php echo e(Form::open(array('url' => 'course/' . $course->id, 'class' => 'pull-right'))); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('Delete', array('class' => 'btn btn-danger'))); ?>

                        <?php echo e(Form::close()); ?></td>
                <?php endif; ?>
            </tr>
            
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>