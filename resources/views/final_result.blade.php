@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<h3>{{App\CourseName::find(App\Course::find($courseid)->courses_names_id)->course_name}}</h3>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>Student Nmae</th>
	       @foreach($course_components as $course_component)
	         <th>{{$course_component->course_component}}</th>
	         <input hidden="hidden" id="components[]" name="components[]" value=" {{$course_component->id}}">
	       @endforeach
	      <th>Total Degree</th>
	      
	  
	  </thead>
	  <tbody>
	   
	       @foreach($students as $student)
	        	<tr><th><input hidden="hidden" type="text" name="sname[]" value="{{App\Student::find($student->student_id)->student_name}}" >

          <p>{{App\Student::find($student->student_id)->student_name}}</p></th>
	        	<input hidden="hidden" id="course_id" name="course_id" value=" {{$student->course_id}}">
	       @foreach($course_components as $course_component)
	       <?php $dgr= App\Degree::where('student_id','=',$student->student_id)->where('course_component_id','=',$course_component->id)->first();?>
	       	<td><input disabled="disabled" type="text" name="degrees[]" value="{{$dgr->degree}}" class="form-control input-md"></td>
	          @endforeach
	          <?php $total= App\Result::where('course_id','=',$courseid)->first();?>
	          <td><input disabled="disabled" type="text" name="degrees[]" value="{{$total->total_degree}}" class="form-control input-md"></td></tr>
	       @endforeach
	  </tbody>
	</table>
	<!-- <a href="javascript:window.print()"onclick="window.print();return false" class="btn btn-primary"><h5>print</h5></a> -->
@stop

