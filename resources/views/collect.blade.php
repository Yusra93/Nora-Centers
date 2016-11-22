@extends('layouts.master')
@section('page_heading','Teacher')
@section('content')
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('/student/'.$student->id) }}" > Back</a>
    <legend> </legend>
    <!--overview end -->
        @if( $col_obtained == $course->course_cost )
          <p>ok</p>
          <?php $course_result= App\Course::find($course->id);
            
          ?>
        @if($course_result->result == 1)
         <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Name</th>
         @foreach($course_components as $course_component)
           <th>{{$course_component->course_component}}</th>
           <input hidden="hidden" id="components[]" name="components[]" value=" {{$course_component->id}}">
         @endforeach
        <th>Total Degree</th>
        
    
    </thead>
    <tbody>
     
            <tr><th>

          <p>{{$student->student_name}}</p></th>
            <input hidden="hidden" id="course_id" name="course_id" value=" {{$student->course_id}}">
         @foreach($course_degrees as $course_degree)
        
          <td><input disabled="disabled" type="text" name="degrees[]" value="{{$course_degree->degree}}" class="form-control input-md"></td>
            @endforeach
            
            <td><input disabled="disabled" type="text" name="degrees[]" value="{{$total}}" class="form-control input-md"></td></tr>
         
    </tbody>
  </table>
 
@endif
        @else
        <!-- start form -->
        <form action="{{ url ('/collect') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
      	<fieldset>
      	{!! csrf_field() !!}

      	<!-- Add Product -->
      	<!-- input student name-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="student_name">Student Name</label>
      	  <div class="col-md-5">
      	  <!-- <input id="student_name" name="student_name"  placeholder="student name" class="form-control input-md" value="{{$student->student_name}}" required="" type="text"> -->
          <input hidden="hidden" id="student_name" name="student_name" value="{{$student->student_name}}">
          <p>{{$student->student_name}}</p>
      	  </div>
      	</div>

        <!-- input student address-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="course_name">Course Name</label>
      	  <div class="col-md-4">
      	  <!-- <input id="course_name" name="course_name" placeholder="course name" class="form-control input-md"  value="{{App\CourseName::find($course->courses_names_id)->course_name}}" required="" type="text"> -->

          <input hidden="hidden" id="course_name" name="course_name" 
          value="{{$course->id}}">
          <p>{{App\CourseName::find($course->courses_names_id)->course_name}}</p>
      	  </div>
      	</div>

        <div class="form-group">
      	  <label class="col-md-4 control-label" for="course_cost">Course Cost</label>
      	  <div class="col-md-2">
<!--       	  <input id="course_cost"  name="course_cost" placeholder="course cost" class="form-control input-md" value="{{$course->course_cost}}" required="" type="number">

 -->      <input hidden="hidden" id="course_cost" name="course_cost" value="{{$course->course_cost}}">
          <p>{{$course->course_cost}}</p>
 </div>
      	</div>


      	
		<div class="form-group">
		      	  <label class="col-md-4 control-label" for="obtained">Obtained</label>
		      	  <div class="col-md-2">
		      	  <!-- <input id="obtained" disabled="disabled" name="obtained" placeholder="obtained" class="form-control input-md" value="{{$col_obtained}}" required="" type="number"> -->
              <p>{{$col_obtained}}</p>
		      	  </div>
		      	</div>
      	<!-- input student specialty -->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="remain">Remained</label>
      	  <div class="col-md-2">
      	  <!-- <input id="remain" name="remain" disabled="disabled" value="{{$course->course_cost - $col_obtained}}" placeholder="remain " class="form-control input-md" required="" type="number"> -->
          <p>{{$course->course_cost - $col_obtained}}</p>
      	  </div>
      	</div>
      	<!-- input student educational level-->
      	<div class="form-group">
      	  <label class="col-md-4 control-label" for="payment">Payment</label>
      	  <div class="col-md-2">
      	  <input id="obtained" name="obtained" placeholder="Pay" class="form-control input-md" required="" type="number">
      	  </div>
      	</div>

      	<!-- Button -->
      	<div class="form-group">
        		<label class="col-md-5 control-label" for="submit"></label>
        		<div class="col-md-5">
          		<button id="submit" name="submit" class="btn btn-primary">Save</button>
              <input type="button" class="btn btn-default" onclick="location.href='{{ url ('colprint')."/"."$student->id/$course->id" }}';" value="Issu a Pill" />
        		</div>
      	</div>
      	

      	</fieldset>
      	

      	 
      	</form>
        @endif

@stop