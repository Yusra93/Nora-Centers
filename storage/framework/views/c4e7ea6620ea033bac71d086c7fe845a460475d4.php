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
      <h2>Teachers:   [ <?php echo e($input['from_date']); ?> ] to [ <?php echo e($input['to_date']); ?> ]</h2>
    <main>
    

       <table class="table table-bordered">
        <thead>
           <th class="col-sm-12">name</th>
           <th class="">phone_number</th>
           <th class="">address</th>
        </thead>
        <tbody>
         
            <?php foreach($teachers as $teacher): ?>

              <?php $orders = App\Teacher::where('id','=', $teacher->id)->get(); ?>
            <?php foreach($orders as $order): ?>
              <tr>
                <td>
                  <?php echo e($order->teacher_name); ?>

                </td>
                <td>
                  <?php echo e($order->teacher_contact_number); ?>

                </td>
                <td>
                  <?php echo e($order->teacher_address); ?>

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



