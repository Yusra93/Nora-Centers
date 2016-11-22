@extends('layouts.master')
@section('content')
 <i class="fa fa-caret-square-o-left"></i><a href="{{ url ('courses_names') }}" > Back </a>
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$coursename->course_name}}</td>
                <td class="col-md-4">{{$coursename->course_description}}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('courses_names/' . $coursename->id . '/edit') }}">Edit</a>
                    {{ Form::open(array('url' => 'courses_names/' . $coursename->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td> 
            </tr>
            
        </tbody>
    </table>
@stop