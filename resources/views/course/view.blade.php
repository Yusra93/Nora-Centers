@extends('layouts.master')
@section('content')

<form action="{{ url('/courses_names/search') }}" role="search" class="form-inline pull-right srcTop">
            <div class="form-group">
              <label for="searchInput" class="sr-only">Users</label>
              <input type="text" name="query" class="form-control input-sm" id="searchInput" placeholder="search ">
            </div>
            <button type="submit" class="btn btn-default btn-sm" >Go</button>
 </form>
      <legend> </legend>
    <legend> </legend>
 <div class="col-sm-12">
            <div class="row">
                @foreach($coursesnames as $course)
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <h3>
                                        <div class="col-xs-12 text-right">
                                            <div class="">{{$course->course_name}}</div>
                                            
                                        </div>
                                    </h3>
                                    <div class="col-xs-12 text-right">{{$course->course_description}} </div>
                                </div>
                            </div>
                            <a href="{{ URL::to('courses_names/' . $course->id) }}">
                                <div class="panel-footer">
                                    <span class="pull-left">More Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <legend> </legend>
    <input type="button" class="btn btn-default" onclick="location.href='{{ url ('courses_names/create') }}';" value="Add Course" />
            
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coursesnames as $course)
            <tr>
                <td><a href="{{ URL::to('courses_names/create') }}" class="" >{{$course->course_name}}</a></td>
                <td>{{$course->course_description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop