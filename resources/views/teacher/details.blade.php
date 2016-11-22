@extends('layouts.master')
@section('page_heading','Teacher')
@section('content')
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('teacher') }}" > Back </a>
    <legend> </legend>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Teacher Details</div>
                <div class="panel-body">
                    


                        <div >
                            <label  class="col-md-4 control-label">Teacher Name</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label">{{$teacher->teacher_name}}</label>
                            </div>
                        </div>
                        <legend></legend>
                        <div >
                            <label  class="col-md-4 control-label">Teacher Address</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label">{{$teacher->teacher_address}}</label>
                            </div>
                        </div>
                        <legend></legend>
                        <div>
                            <label  class="col-md-4 control-label">Teacher Identity Number</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label">{{$teacher->teacher_identity_number}}</label>
                            </div>
                        </div>
                        <legend></legend> 
                        <div>
                            <label  class="col-md-4 control-label">Teacher Email</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label">{{$teacher->teacher_email}}</label>
                            </div>
                        </div>
                        <legend></legend> 
                        <div>
                            <label  class="col-md-4 control-label">Teacher Contact Number</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 control-label">{{$teacher->teacher_contact_number}}</label>
                            </div>
                        </div>
                        <legend></legend> 
                        <a class="btn btn-small btn-info" href="{{ URL::to('teacher/' . $teacher->id . '/edit') }}">Edit</a>
                    {{ Form::open(array('url' => 'teacher/' . $teacher->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }} 
                    
                </div>
            </div>
        </div>
    </div>
</div>
<legend></legend>
<div class="panel panel-success" style="
height: 250px;
overflow: scroll;
overflow-x: hidden ">
<div class="panel-heading ">Courses</div>
<div class="panel-body">
<?php $courses = App\Course::where('teacher_id', '=',$teacher->id)->get(); 
                ?>
    @foreach ($courses as $course)
    <a href="{{URL::to('result/'.$course->id )}}" class="" >
        <div class="col-sm-4">

            <div class="panel panel-success">
                <div class="panel-heading "> {{App\CourseName::find($course->courses_names_id)->course_name}}</div>
                <div class="panel-body">
                </div>

            </div>
        </div>
        @endforeach
    </a>
</div></div>


    @stop