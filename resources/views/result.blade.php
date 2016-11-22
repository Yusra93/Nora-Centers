@extends('layouts.master')
@section('content')
<legend> </legend>
 <div class="col-sm-12" >
            <div class="row" >
                @foreach($courses as $course)
                
                @if($course->result == 1)
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-inverse-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <h3>
                                        <div class="col-xs-12 text-right">
                                            <div class="">{{App\CourseName::find(App\Course::find($course->id)->courses_names_id)->course_name}}
                                            </div>
                                            
                                        </div>
                                    </h3>
                                    <div class="col-xs-12 text-right">{{App\Teacher::find($course->teacher_id)->teacher_name}} </div>
                                </div>
                            </div>
                            <a href="{{ URL::to('final_result/' . $course->id) }}">
                                <div class="panel-footer">
                                    <span class="pull-right">More Detials</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
@stop