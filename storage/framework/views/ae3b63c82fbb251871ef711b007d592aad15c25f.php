<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Control</div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading">Panel heading</div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Role</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php foreach($users as $user): ?>
                          <tr>
                            <th scope="row"><?php echo e($user->id); ?></th>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>

                            <?php if(Auth::user()->role == 2 || $user->id == 1): ?>
                            <b>Disabled</b>
                            <?php else: ?>
                              <div class="form-group" style="margin-bottom: 0px;">
                                  <form method="post" action="/update-role/<?php echo e($user->id); ?>">
                                  <?php echo e(csrf_field()); ?>

                                    <select class="form-control" name="role" onchange="this.form.submit();">
                                      <option value="1" <?php echo e(($user->role) == 1 ? 'selected' : null); ?>>Admin</option>
                                      <option value="2" <?php echo e(($user->role) == 2 ? 'selected' : null); ?>>Employee</option>
                                      <option value="3" <?php echo e(($user->role) == 3 ? 'selected' : null); ?>>Teacher</option>
                                    </select>
                                  </form>
                              </div>
                              <?php endif; ?>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                      <?php endforeach; ?>
                    </div> 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>