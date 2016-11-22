@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<form action="{{ url ('save_add_course') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->
        <div class="form-group">
            
            <input hidden="hidden" id="student_id" name="student_id" value=" {{$id}}">
        </div> 

        <div class="form-group">
            <label class="col-md-4 control-label " for="student">Student Name</label>
            <div class="col-md-2">
            <input class="form-control input-md-4" disabled="disabled" id="student" name="course" value=" {{App\Student::find($id)->student_name}}">
             </div>
        </div> 

        <div class="form-group">
          <label class="col-md-4 control-label" for="course_id">Course Name</label>
          <div class="col-md-4">
            <select id="course_id" name="course_id" class="form-control" required="true">
              @foreach($courses as $course)
                 <?php $course_id=$course->id; ?>
                  <option value="{{ $course_id }}">{{App\CourseName::find($course->courses_names_id)->course_name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="submit"></label>
            <div class="col-md-5">
              <button id="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
  
        </fieldset>
        </form>
@stop