@extends('layouts.master')
@section('content')
 <i class="fa fa-caret-square-o-left"></i><a href="{{ url ('courses_names') }}" > Back </a>
 <input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='{{ url ('add_student/' . $course->id ) }}'" value="Add Student" />
    <legend> </legend>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Teacher Name</th>
                <th>Cost</th>
                <th>Room</th>
                <th>Begin</th>
                <th>End</th>
                <th>Subjects</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @if($course->course_status >= 1)
                <td>{{App\CourseName::find($course->courses_names_id)->course_name}}</td>
                <td>{{App\Teacher::find($course->teacher_id)->teacher_name}}</td>
                <td>{{$course->course_cost}} SDG</td>
                <td>{{$course->course_room}}</td>
                <td>{{$course->course_begin}}</td>
                <td>{{$course->course_end}}</td>
               
                <td>
                   @foreach($subjects as $subject)
                      {{$subject->course_component}}<br>
                   @endforeach
                </td>
                 <td>{{$course->course_time}}</td>
                <td><a class="btn btn-small btn-info" href="{{ URL::to('course/' . $course->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'course/' . $course->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}</td>
                @else
                <td>{{App\CourseName::find($course->courses_names_id)->course_name}}</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td><a class="btn btn-small btn-info" href="{{ URL::to('course/' . $course->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'course/' . $course->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}</td>
                @endif
            </tr>
            
        </tbody>
    </table>
@stop