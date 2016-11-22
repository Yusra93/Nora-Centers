<link rel="stylesheet" href="<?php echo e(asset("css/report.css")); ?>" />
<header class="clearfix">
      <div id="logo">
        <h1>INSTITUTE</h1>
        <!-- <img src="<?php echo e(asset("assets/img/3.png")); ?>"> -->
      </div>

      <h1>Report</h1><br><br>
      <h2>Results:   [ <?php echo e($input['from_date']); ?> ] to [ <?php echo e($input['to_date']); ?> ]</h2>
    <main>
    
        <table class="table table-bordered">
        <thead>
           <th >student name</th>
           <th >course name</th>
           <th >total</th>
        </thead>
        <tbody>
         
            <?php foreach($results as $result): ?>

              <?php $orders = App\Result::where('id','=', $result->id)->get();
               ?>
            <?php foreach($orders as $order): ?>
            <?php $courses_names_id = App\Course::where('id','=', $order->course_id)->first();
           $student = App\Student::where('id','=', $order->student_id)->first();?>
              <tr>
                <td>
                  <?php echo e($student->student_name); ?>

                </td>
                <td>
                  <?php echo e(App\CourseName::where('id','=', $courses_names_id->courses_names_id)->first()->course_name); ?>

                </td>
                <td>
                  <?php echo e($order->total_degree); ?>

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



