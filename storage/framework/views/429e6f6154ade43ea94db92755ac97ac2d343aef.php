<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url ('expense')); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
	<?php echo csrf_field(); ?>


	<!-- Form Name -->
	<table class="table">
		<tr>
			<td>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="expense_name">Name</label>
					<div class="col-md-8">
						<input id="expense_name" name="expense_name" placeholder="name" class="form-control input-md" required="" type="text">
					</div>
				</div>
			</td>

			<td>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="expense_category">Category</label>
					<div class="col-md-8">
						<input list="expense_category" name="expense_category" class="form-control input-md">
						<datalist id="expense_category">
							<option value="Daily">
								<option value="Governmental">
									<?php /*<!-- <?php foreach($distributors as $distributor): ?> -->
									<!-- <option value="<?php echo e($distributor->distributor_name); ?>"> -->
									<!-- <?php endforeach; ?> -->*/ ?>
									<option value="Other">
									</datalist>
								</div>
							</div>
						</td>

						<td>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="expense_price">Price</label>
								<div class="col-md-8">
									<input id="expense_price" name="expense_price" placeholder="price" class="form-control input-md" required="" type="text">
								</div>
							</div>
						</td>
						<td>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="expense_description">Description</label>
								<div class="col-md-8">
									<textarea id="expense_description" name="expense_description" placeholder="description" class="form-control input-md" type="text"></textarea>
								</div>
							</div>
						</td>
						<td>

							<td>
								<!-- input expense_amount-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="expense_date">Date</label>
									<div class="col-md-6">
										<input id="expense_date" name="expense_date" placeholder="date" class="form-control input-md" required="true" type="date">
									</div>
								</div>
							</td>
							<td>

								<!-- Button -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="submit"></label>
									<div class="col-md-8">
										<button id="submit" name="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
							</td>
						</tr>
					</form>
					</table>
					<legend></legend>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>ategory</th>
								<th>Price</th>
								<th>Description</th>
								<th>Date</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($expenses as $expense): ?>
							<tr>
								<td><?php echo e($expense->expense_name); ?></td>
								<td><?php echo e($expense->expense_category); ?></td>
								<td><?php echo e($expense->expense_price); ?></td>
								<td><?php echo e($expense->expense_description); ?></td>
								<td><?php echo e($expense->expense_date); ?></td>
								<td>
									<!--    <a class="btn btn-small btn-info" href="<?php echo e(URL::to('expense/' . $expense->id . '/edit')); ?>">تعديل</a> -->
									<?php echo e(Form::open(array('url' => 'expense/' . $expense->id, 'class' => 'pull-right'))); ?>

									<?php echo e(Form::hidden('_method', 'DELETE')); ?>

									<?php echo e(Form::submit('Delete', array('class' => 'btn btn-warning'))); ?>

									<?php echo e(Form::close()); ?>

								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>