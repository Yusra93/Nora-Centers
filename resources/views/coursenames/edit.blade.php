@extends('layouts.master')
@section('page_heading','تعديل منتج')
@section('content')
           
<!--overview start-->
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('student/'.$student->id) }}" > رجوع </a>
    <!--overview end -->
 	{{ Form::model($student, array('route' => array('student.update', $student->id), 'method' => 'PUT','class' => 'form-horizontal')) }}


	<!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_name', 'اﻹسم', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_name', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_address', 'العنوان', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_address', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    
	<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
	  		<div class="col-md-4">
	  			{{ Form::submit('تحديث', array('class' => 'btn btn-primary')) }}
			</div>
		</div>
    {{ Form::close() }}
           
            
@stop
