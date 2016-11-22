<?php $__env->startSection('content'); ?>
<legend> </legend>
 <div class="col-sm-12" >
            <div class="row" >
                <?php foreach($courses as $course): ?>
                
                <?php if($course->result == 1): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-inverse-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <h3>
                                        <div class="col-xs-12 text-right">
                                            <div class=""><?php echo e(App\CourseName::find(App\Course::find($course->id)->courses_names_id)->course_name); ?>

                                            </div>
                                            
                                        </div>
                                    </h3>
                                    <div class="col-xs-12 text-right"><?php echo e(App\Teacher::find($course->teacher_id)->teacher_name); ?> </div>
                                </div>
                            </div>
                            <a href="<?php echo e(URL::to('final_result/' . $course->id)); ?>">
                                <div class="panel-footer">
                                    <span class="pull-right">More Detials</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>