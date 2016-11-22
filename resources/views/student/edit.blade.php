@extends('layouts.master')
@section('page_heading','تعديل منتج')
@section('content')
           
<!--overview start-->
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('student/'.$student->id) }}" > رجوع </a>
    <!--overview end -->
 	{{ Form::model($student, array('route' => array('student.update', $student->id), 'method' => 'PUT','class' => 'form-horizontal')) }}


	<!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_name', 'Name', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_name', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_address', 'Address', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_address', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_specialty', 'Specialty', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-2">
	        	{{ Form::text('student_specialty', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    	<!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_educational_level', 'Educational Level', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_educational_level', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_age', 'Age', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_age', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_identity_number', 'Identity Number', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-2">
	        	{{ Form::text('student_identity_number', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    	<!-- Text input-->
		<div class="form-group">
	        {{ Form::label('student_email', 'Email', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_email', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    	<!-- Text input-->
    	<div class="form-group">
	        {{ Form::label('student_contact_number', 'Contact Number', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('student_contact_number', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>

	<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
	  		<div class="col-md-4">
	  			{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
			</div>
		</div>
    {{ Form::close() }}
           
            
@stop
