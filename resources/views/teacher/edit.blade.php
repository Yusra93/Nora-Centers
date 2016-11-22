@extends('layouts.master')
@section('page_heading','تعديل منتج')
@section('content')
           
<!--overview start-->
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('teacher/'.$teacher->id) }}" > Back </a>
    <!--overview end -->
 	{{ Form::model($teacher, array('route' => array('teacher.update', $teacher->id), 'method' => 'PUT','class' => 'form-horizontal')) }}


	<!-- Text input-->
		<div class="form-group">
	        {{ Form::label('teacher_name', 'Name', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('teacher_name', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>

    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('teacher_address', 'Address', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('teacher_address', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    <!-- Text input-->
		<div class="form-group">
	        {{ Form::label('teacher_identity_number', 'Identity Number', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-2">
	        	{{ Form::text('teacher_identity_number', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    	<!-- Text input-->
		<div class="form-group">
	        {{ Form::label('teacher_email', 'Email', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('teacher_email', null, array('class' => 'form-control input-md')) }}
	        </div>
    	</div>
    	<!-- Text input-->
    	<div class="form-group">
	        {{ Form::label('teacher_contact_number', 'Contact Number', array('class' => 'col-md-4 control-label')) }}
	        <div class="col-md-5">
	        	{{ Form::text('teacher_contact_number', null, array('class' => 'form-control input-md')) }}
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
