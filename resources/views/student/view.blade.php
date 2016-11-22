@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<script src="{{asset('js/ligthtable.js')}}"></script>

<input type="button" class="btn btn-default" onclick="location.href='{{ url ('student/create') }}';" value="New Student" />
<form class="form-inline pull-right srcTop">
 <input type="search" class="light-table-filter form-control " data-table="order-table" placeholder="Filter">
 </form>
 @if (Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
    <legend> </legend>
    <div class="table table-bordered ">
    <table  class="order-table table" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td><a href="{{ URL::to('student/' . $student->id ) }}" class="" >{{$student->student_name}}</a></td>
                <td>{{$student->student_address}}</td>
                <td>{{$student->student_contact_number}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @stop