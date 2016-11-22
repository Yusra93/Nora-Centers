<link rel="stylesheet" href="<?php echo e(asset("css/report.css")); ?>" />
<header class="clearfix">
  <div id="logo">
    <h1>INSTITUTE</h1>
    <!-- <img src="<?php echo e(asset("assets/img/3.png")); ?>"> -->
  </div>

  <h1>Report</h1><br><br>
  <h2>Courses:   [ <?php echo e($input['from_date']); ?> ] to [ <?php echo e($input['to_date']); ?> ]</h2>
  <main>


   <table class="table table-bordered">
    <thead>
     <th class="col-sm-12">name</th>
     <th class="">teacher</th>
     <th class="">cost</th>
   </thead>
   <tbody>

    <?php foreach($courses as $course): ?>

    <?php $orders = App\Course::where('id','=', $course->id)->get(); ?>
    <?php foreach($orders as $order): ?>

    <tr>
      <td>
        <?php echo e(App\CourseName::where('id','=', $order->courses_names_id)->first()->course_name); ?>

      </td>
      <?php if($order->teacher_id == null): ?>
      <td></td>
      <?php else: ?>
      <td>
        <?php echo e(App\Teacher::find($order->teacher_id)->teacher_name); ?> 
      </td>
      <?php endif; ?>
      <td>
        <?php echo e($order->course_cost); ?>

      </td>

    </tr>
    <?php endforeach; ?>
    <?php endforeach; ?>

  </tbody>
</table>
<div id="notices">
  <div>NOTICE:</div>
  <div class="notice"> .</div>
</div>
</main>
<footer>
  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
</footer>



