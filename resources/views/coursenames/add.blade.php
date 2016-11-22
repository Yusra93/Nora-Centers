@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('/courses_names') }}" > Back</a>
    <legend> </legend>
    <!--overview end -->

        <!-- start form -->
        <form action="{{ url ('courses_names') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->

        <!-- input course name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_name">Name</label>
          <div class="col-md-5">
          <input id="course_name" name="course_name" placeholder="name" class="form-control input-md" required="" type="text">
          </div>
        </div>

        <!-- input course description-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="course_description">Description</label>
          <div class="col-md-4">
          <textarea id="course_description" name="course_description" placeholder="description" class="form-control input-md" required="" type="text" ></textarea>
          </div>
        </div>


        <!-- ----------------------------------------------------------------------------------- -->

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="submit"></label>
            <div class="col-md-5">
              <button id="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

        </fieldset>
        </form>
        <!-- End form--> 
@stop