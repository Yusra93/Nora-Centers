<?php $__env->startSection('content'); ?> 
<script src="<?php echo e(asset('js/ligthtable.js')); ?>"></script>
<form class="form-inline pull-right srcTop">
 <input type="search" class="light-table-filter form-control " data-table="order-table" placeholder="Filter">
 </form>
 
 <table  class="order-table table" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact Number</th>


								</tr>
							</thead>
							<tbody>
								<?php foreach($teachers as $teacher): ?>
								<tr>
									<td><a href="<?php echo e(URL::to('teacher/' . $teacher->id )); ?>" class="" ><?php echo e($teacher->teacher_name); ?></a></td>
									<td><?php echo e($teacher->teacher_contact_number); ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>