<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('/courses_names/search')); ?>" role="search" class="form-inline pull-right srcTop">
            <div class="form-group">
              <label for="searchInput" class="sr-only">Users</label>
              <input type="text" name="query" class="form-control input-sm" id="searchInput" placeholder="search ">
            </div>
            <button type="submit" class="btn btn-default btn-sm" >Go</button>
 </form>
      <legend> </legend>
    <legend> </legend>
 <div class="col-sm-12" >
            <div class="row" >
                <?php foreach($courses as $course): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <h3>
                                        <div class="col-xs-12 text-right">
                                            <div class=""><?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?>

                                            </div>
                                            
                                        </div>
                                    </h3>
                                    <div class="col-xs-12 text-right"><?php echo e(App\Teacher::find($course->teacher_id)->teacher_name); ?> </div>
                                </div>
                            </div>
                            <a href="<?php echo e(URL::to('course/' . $course->id)); ?>">
                                <div class="panel-footer">
                                    <span class="pull-right">عرض التفاصيل</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <legend> </legend>
    <input type="button" class="btn btn-default" onclick="location.href='<?php echo e(url ('courses_names/create')); ?>';" value="إضافة كورس" />
            
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($coursesnames as $course): ?>
            <tr>
                <td><a href="<?php echo e(URL::to('addcourse/'.$course->id)); ?>" class="" ><?php echo e($course->course_name); ?></a></td>
                <td><?php echo e($course->course_description); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>