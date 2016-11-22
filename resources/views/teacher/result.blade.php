@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<?php
$result = App\Result::where('course_id','=',$id)->first();
?>
@if($result == null)
<form action="{{ url ('result') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <fieldset>
   {!! csrf_field() !!}
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>اسم الطالب</th>
	       @foreach($course_components as $course_component)
	         <th>{{$course_component->course_component}}</th>
	         <input hidden="hidden" id="components[]" name="components[]" value=" {{$course_component->id}}">
	       @endforeach
	     
	      
	  
	  </thead>
	  <tbody>
	   <tr>
	     
	    </tr>
	       @foreach($students as $student)
	        	<tr><th><input hidden="hidden" type="text" name="sname[]" value="{{App\Student::find($student->student_id)->student_name}}" >

          <p>{{App\Student::find($student->student_id)->student_name}}</p></th>
	        	<input hidden="hidden" id="course_id" name="course_id" value=" {{$student->course_id}}">
	       @foreach($course_components as $course_component)
	       <?php $dgr= App\Degree::where('student_id','=',$student->student_id)->where('course_component_id','=',$course_component->id)->first();?>
	       @if($dgr === null)
	       	<td><input type="text" name="degrees[]" value="0" class="form-control input-md"></td>
	       	@else
	       	<td><input type="text" name="degrees[]" value="{{$dgr->degree}}" class="form-control input-md"></td>
	       	@endif
	          @endforeach
	          </tr>
	       @endforeach
	        
	  </tbody>
	</table>
<form action="">
  <input type="radio" name="check" value="0" checked> Update<br>
  <input type="radio" name="check" value="1">Issue Result<br>

</form>

  <input type="radio" name="endcheck" value="1"> End Course<br>


	<div class="form-group">
	            <label class="col-md-5 control-label" for="submit"></label>
	            <div class="col-md-5">
	              <button id="submit" name="submit" class="btn btn-primary">Save</button>
	            </div>
	        </div>
  
        </fieldset>
        </form>
@else
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>Student Name</th>
	       @foreach($course_components as $course_component)
	         <th>{{$course_component->course_component}}</th>
	         <input hidden="hidden" id="components[]" name="components[]" value=" {{$course_component->id}}">
	       @endforeach
	     
	      
	  
	  </thead>
	  <tbody>
	   <tr>
	     
	    </tr>
	       @foreach($students as $student)
	        	<tr><th><input hidden="hidden" type="text" name="sname[]" value="{{App\Student::find($student->student_id)->student_name}}" >

          <p>{{App\Student::find($student->student_id)->student_name}}</p></th>
	        	<input hidden="hidden" id="course_id" name="course_id" value=" {{$student->course_id}}">
	       @foreach($course_components as $course_component)
	       <?php $dgr= App\Degree::where('student_id','=',$student->student_id)->where('course_component_id','=',$course_component->id)->first();?>
	       @if($dgr === null)
	       	<td><input type="text" name="degrees[]" value="0" class="form-control input-md"></td>
	       	@else
	       	<td><input disabled="disabled" type="text" name="degrees[]" value="{{$dgr->degree}}" class="form-control input-md"></td>
	       	@endif
	          @endforeach
	          </tr>
	       @endforeach
	        
	  </tbody>
	</table>

@endif
@stop

