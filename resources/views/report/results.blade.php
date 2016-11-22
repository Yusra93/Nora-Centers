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
      <h2>Results:   [ {{$input['from_date']}} ] to [ {{$input['to_date']}} ]</h2>
    <main>
    
        <table class="table table-bordered">
        <thead>
           <th >student name</th>
           <th >course name</th>
           <th >total</th>
        </thead>
        <tbody>
         
            @foreach($results as $result)

              <?php $orders = App\Result::where('id','=', $result->id)->get();
               ?>
            @foreach($orders as $order)
            <?php $courses_names_id = App\Course::where('id','=', $order->course_id)->first();
           $student = App\Student::where('id','=', $order->student_id)->first();?>
              <tr>
                <td>
                  {{$student->student_name}}
                </td>
                <td>
                  {{App\CourseName::where('id','=', $courses_names_id->courses_names_id)->first()->course_name}}
                </td>
                <td>
                  {{$order->total_degree}}
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



