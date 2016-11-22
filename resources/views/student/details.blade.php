@extends('layouts.master')
@section('page_heading','Student')
@section('content')
<!-- <input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='{{ url ('/collect') }}';" value="تحصيل" /> -->
<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='{{ url ('add_course/' . $student->id ) }}'" value="Add Course" />
<i class="fa fa-caret-square-o-left"></i><a href="{{ url ('student') }}" > Back </a>
<legend></legend>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Details</div>
                <div class="panel-body">



                    <div >
                        <label  class="col-md-4 control-label">Student Name</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_name}}</label>
                        </div>
                    </div>
                    <legend></legend>
                    <div >
                        <label  class="col-md-4 control-label">Student Address</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_address}}</label>
                        </div>
                    </div>
                    <legend></legend>
                    <div >
                        <label  class="col-md-4 control-label">Student Specialty</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_specialty}}</label>
                        </div>
                    </div>
                    <legend></legend>
                    <div >
                        <label  class="col-md-4 control-label">Student Educational Level</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_educational_level}}</label>
                        </div>
                    </div>
                    <legend></legend>
                    <div >
                        <label  class="col-md-4 control-label">Student Age</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_age}}</label>
                        </div>
                    </div>
                    <legend></legend> 
                    <div>
                        <label  class="col-md-4 control-label">Student Identity Number</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_identity_number}}</label>
                        </div>
                    </div>
                    <legend></legend> 
                    <div>
                        <label  class="col-md-4 control-label">Student Email</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_email}}</label>
                        </div>
                    </div>
                    <legend></legend> 
                    <div>
                        <label  class="col-md-4 control-label">Student Contact Number</label>

                        <div class="col-md-6">
                            <label  class="col-md-4 control-label">{{$student->student_contact_number}}</label>
                        </div>
                    </div>
                    <legend></legend> 
                    <a class="btn btn-small btn-info" href="{{ URL::to('student/' . $student->id . '/edit') }}">Edit</a>
                    {{ Form::open(array('url' => 'student/' . $student->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}  
                    
                </div>
            </div>
        </div>
    </div>
</div>
<legend> </legend>
<div class="row">
    @foreach ($courses as $course)
    

    @endforeach
    <div class="panel panel-success" style="
    height: 250px;
    overflow: scroll;
    overflow-x: hidden ">
    <div class="panel-heading ">Active Courses</div>
    <div class="panel-body">
        @foreach ($courses as $course)
        <?php $coursedetails = App\Course::find($course->course_id);
    $collect = App\Collect::where('course_id','=',$course->course_id)->where('student_id','=',$student->id)->get();
    
    foreach ($collect as $collect) {

      if ($coursedetails->course_cost == $collect->obtained) {
          $remain = 0;
      }
      else{
        $remain = 1;}
    }

    ?>
        <a href="{{ URL::to('collect/'.$student->id .'/'. App\CourseandStudent::find($course->id)->course_id)  }}" class="" >
            <div class="col-sm-2">
               @if($coursedetails->course_status === 1) 
               <div class="panel panel-success">
                <div class="panel-heading "> {{App\CourseName::find(App\Course::find(App\CourseandStudent::find($course->id)->course_id)->courses_names_id)->course_name}}</div>
                <div class="panel-body">
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </a>
</div></div>

<div class="panel panel-danger" style="
height: 250px;
overflow: scroll;
overflow-x: hidden ">
<div class="panel-heading ">Finshed Courses with Debts</div>
<div class="panel-body">
    @foreach ($courses as $course)
     <?php $coursedetails = App\Course::find($course->course_id);
    $collect = App\Collect::where('course_id','=',$course->course_id)->where('student_id','=',$student->id)->get();
    
    foreach ($collect as $collect) {

      if ($coursedetails->course_cost == $collect->obtained) {
          $remain = 0;
      }
      else{
        $remain = 1;}
    }

    ?>
    <a href="{{ URL::to('collect/'.$student->id .'/'. App\CourseandStudent::find($course->id)->course_id)  }}" class="" >
        <div class="col-sm-2">

            @if(($coursedetails->course_status === 2) && ($remain ==1 ))
            <div class="panel panel-danger">
                <div class="panel-heading "> {{App\CourseName::find(App\Course::find(App\CourseandStudent::find($course->id)->course_id)->courses_names_id)->course_name}}</div>
                <div class="panel-body">
                </div>

            </div>
            @endif
        </div>
        
        @endforeach
    </div>
</a>
</div>

<div class="panel panel-warning" style="
height: 250px;
overflow: scroll;
overflow-x: hidden ">
<div class="panel-heading ">Finshed Courses without Debts</div>
<div class="panel-body">
    @foreach ($courses as $course)
     <?php $coursedetails = App\Course::find($course->course_id);
    $collect = App\Collect::where('course_id','=',$course->course_id)->where('student_id','=',$student->id)->get();
    
    foreach ($collect as $collect) {

      if ($coursedetails->course_cost == $collect->obtained) {
          $remain = 0;
      }
      else{
        $remain = 1;}
    }

    ?>
    <a href="{{ URL::to('collect/'.$student->id .'/'. App\CourseandStudent::find($course->id)->course_id)  }}" class="" >
        <div class="col-sm-2">
            @if(($coursedetails->course_status === 2) && ($remain !=1 ))
            <div class="panel panel-warning">
                <div class="panel-heading "> {{App\CourseName::find(App\Course::find(App\CourseandStudent::find($course->id)->course_id)->courses_names_id)->course_name}}</div>
                <div class="panel-body">
                </div>

            </div>
            @endif
        </div>
        
        @endforeach
    </div>
</a>
</div>
</div>
@stop