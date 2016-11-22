
<?php $__env->startSection('page_heading','Student'); ?>
<?php $__env->startSection('content'); ?>
<!-- <input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='<?php echo e(url ('/collect')); ?>';" value="تحصيل" /> -->
<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='<?php echo e(url ('add_course/' . $student->id )); ?>'" value="Add Course" />
<i class="fa fa-caret-square-o-left"></i><a href="<?php echo e(url ('student')); ?>" > Back </a>
<legend></legend>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Details</div>
                <div class="panel-body">
                    <form class="form">


                        <div >
                            <label  class="col-md-4 control-label">Student Name</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_name); ?></label>
                            </div>
                        </div>
                        <legend></legend>
                        <div >
                            <label  class="col-md-4 control-label">Student Address</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_address); ?></label>
                            </div>
                        </div>
                        <legend></legend>
                        <div >
                            <label  class="col-md-4 control-label">Student Specialty</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_specialty); ?></label>
                            </div>
                        </div>
                        <legend></legend>
                        <div >
                            <label  class="col-md-4 control-label">Student Educational Level</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_educational_level); ?></label>
                            </div>
                        </div>
                        <legend></legend>
                        <div >
                            <label  class="col-md-4 control-label">Student Age</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_age); ?></label>
                            </div>
                        </div>
                        <legend></legend> 
                        <div>
                            <label  class="col-md-4 control-label">Student Identity Number</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_identity_number); ?></label>
                            </div>
                        </div>
                        <legend></legend> 
                        <div>
                            <label  class="col-md-4 control-label">Student Email</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_email); ?></label>
                            </div>
                        </div>
                        <legend></legend> 
                        <div>
                            <label  class="col-md-4 control-label">Student Contact Number</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label"><?php echo e($student->student_contact_number); ?></label>
                            </div>
                        </div>
                        <legend></legend> 
                        <a class="btn btn-small btn-info" href="<?php echo e(URL::to('student/' . $student->id . '/edit')); ?>">Edit</a>
                        <?php echo e(Form::open(array('url' => 'student/' . $student->id, 'class' => 'pull-right'))); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('Delete', array('class' => 'btn btn-danger'))); ?>

                        <?php echo e(Form::close()); ?>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<legend> </legend>

<div class="panel panel-success" style="
height: 250px;
overflow: scroll;
overflow-x: hidden ">
<div class="panel-heading ">Active Courses</div>
<div class="panel-body">
    <?php foreach($courses as $course): ?>
    <a href="<?php echo e(URL::to('collect/'.$student->id .'/'. App\CourseandStudent::find($course->id)->course_id)); ?>" class="" >
        <div class="col-sm-4">

            <div class="panel panel-success">
                <div class="panel-heading "> <?php echo e(App\CourseName::find(App\Course::find(App\CourseandStudent::find($course->id)->course_id)->courses_names_id)->course_name); ?></div>
                <div class="panel-body">
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </a>
</div></div>

<div class="panel panel-danger" style="
height: 250px;
overflow: scroll;
overflow-x: hidden ">
<div class="panel-heading ">الكورسات المنتهية غير المدفوعة</div>
<div class="panel-body">
    <?php foreach($courses as $course): ?>
    <a href="<?php echo e(URL::to('collect/'.$student->id .'/'. App\CourseandStudent::find($course->id)->course_id)); ?>" class="" >
        <div class="col-sm-4">

            <div class="panel panel-danger">
                <div class="panel-heading "> <?php echo e(App\CourseName::find(App\Course::find(App\CourseandStudent::find($course->id)->course_id)->courses_names_id)->course_name); ?></div>
                <div class="panel-body">
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
</a>
</div>

<div class="panel panel-warning" style="
height: 250px;
overflow: scroll;
overflow-x: hidden ">
<div class="panel-heading ">الكورسات المنتهية المدفوعة</div>
<div class="panel-body">
    <?php foreach($courses as $course): ?>
    <a href="<?php echo e(URL::to('collect/'.$student->id .'/'. App\CourseandStudent::find($course->id)->course_id)); ?>" class="" >
        <div class="col-sm-4">

            <div class="panel panel-warning">
                <div class="panel-heading "> <?php echo e(App\CourseName::find(App\Course::find(App\CourseandStudent::find($course->id)->course_id)->courses_names_id)->course_name); ?></div>
                <div class="panel-body">
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>