@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<form action="{{ url ('save_add_student') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->
        <div class="form-group">
            
            <input hidden="hidden" id="course_id" name="course_id" value=" {{$id}}">
        </div> 

        <div class="form-group">
            <label class="col-md-4 control-label " for="course">Course Cost</label>
            <div class="col-md-2">
            <input class="form-control input-md-4" disabled="disabled" id="course" name="course" value=" {{App\CourseName::find(App\Course::find($id)->courses_names_id)->course_name}}">
             </div>
        </div> 

        <div class="form-group">
          <label class="col-md-4 control-label" for="teacher_id">Student Name</label>
          <div class="col-md-4">
            <select id="student_id" name="student_id" class="form-control" required="true">
              @foreach($students as $student)
                 <?php $student_id=$student->id; ?>
                  <option value="{{ $student_id }}">{{App\Student::find($student_id)->student_name}}</option>
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