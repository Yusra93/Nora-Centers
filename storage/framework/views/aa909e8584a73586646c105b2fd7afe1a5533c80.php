<?php $__env->startSection('content'); ?>
<input type="button" class="btn btn-default" onclick="location.href='<?php echo e(url ('course/create')); ?>';" value="إضافة كورس" />
<form action="<?php echo e(url('/course/search')); ?>" role="search" class="form-inline pull-right srcTop">
            <div class="form-group">
              <label for="searchInput" class="sr-only">Users</label>
              <input type="text" name="query" class="form-control input-sm" id="searchInput" placeholder="search ">
            </div>
            <button type="submit" class="btn btn-default btn-sm" >Go</button>
 </form>
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($courses as $course): ?>
            <tr>
                <td><a href="<?php echo e(URL::to('course/' . $course->id )); ?>" class="" ><?php echo e($course->course_name); ?></a></td>
                <td><?php echo e($course->course_description); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>