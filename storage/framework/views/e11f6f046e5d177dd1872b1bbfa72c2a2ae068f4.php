<link rel="stylesheet" href="<?php echo e(asset("css/report.css")); ?>" />
<header class="clearfix">
      <div id="logo">
        <h1>Rewarding Center</h1>
    <div style="margin: auto; display: block; " >
        <img 
         src="<?php echo e(asset('rewarding.jpg')); ?>" alt="obaaa" href="obaaa.sd">
        </div>
      </div>

      <h1>Report</h1><br><br>
      <h2>Students:   [ <?php echo e($input['from_date']); ?> ] to [ <?php echo e($input['to_date']); ?> ]</h2>
    <main>
    

      <table class="table table-bordered">
        <thead>
           <th >name</th>
           <th >phone_number</th>
           <th >address</th>
        </thead>
        <tbody>
         
            <?php foreach($students as $student): ?>

              <?php $orders = App\Student::where('id','=', $student->id)->get(); ?>
            <?php foreach($orders as $order): ?>
              <tr>
                <td>
                  <?php echo e($order->student_name); ?>

                </td>
                <td>
                  <?php echo e($order->student_contact_number); ?>

                </td>
                <td>
                  <?php echo e($order->student_address); ?>

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
    



