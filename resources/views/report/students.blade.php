<link rel="stylesheet" href="{{ asset("css/report.css") }}" />
<header class="clearfix">
      <div id="logo">
        <h1>Rewarding Center</h1>
    <div style="margin: auto; display: block; " >
        <img 
         src="{{asset('rewarding.jpg')}}" alt="obaaa" href="obaaa.sd">
        </div>
      </div>

      <h1>Report</h1><br><br>
      <h2>Students:   [ {{$input['from_date']}} ] to [ {{$input['to_date']}} ]</h2>
    <main>
    

      <table class="table table-bordered">
        <thead>
           <th >name</th>
           <th >phone_number</th>
           <th >address</th>
        </thead>
        <tbody>
         
            @foreach($students as $student)

              <?php $orders = App\Student::where('id','=', $student->id)->get(); ?>
            @foreach($orders as $order)
              <tr>
                <td>
                  {{$order->student_name}}
                </td>
                <td>
                  {{$order->student_contact_number}}
                </td>
                <td>
                  {{$order->student_address}}
                </td>
              
              </tr>
            @endforeach
            @endforeach
           
          
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice"> .</div>
      </div>
    </main>
    



