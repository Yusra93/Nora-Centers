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
      <h2>Teachers:   [ {{$input['from_date']}} ] to [ {{$input['to_date']}} ]</h2>
    <main>
    

       <table class="table table-bordered">
        <thead>
           <th class="col-sm-12">name</th>
           <th class="">phone_number</th>
           <th class="">address</th>
        </thead>
        <tbody>
         
            @foreach($teachers as $teacher)

              <?php $orders = App\Teacher::where('id','=', $teacher->id)->get(); ?>
            @foreach($orders as $order)
              <tr>
                <td>
                  {{$order->teacher_name}}
                </td>
                <td>
                  {{$order->teacher_contact_number}}
                </td>
                <td>
                  {{$order->teacher_address}}
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
    <footer>
      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    </footer>



