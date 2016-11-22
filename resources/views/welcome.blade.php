@extends('layouts.master')
@section('content') 
<!--  -->

<!--  -->
<div class="row">
	<!-- <div class="col-xs-12 ">
		<div class="panel panel-default">
			<div class="panel-body ">
				<form class="form-inline " action="{{ url ('/student/search') }}" method="POST" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<div class="form-group">
						<input list="student_list" placeholder="بحث عن طالب" name="student" class="form-control input-md">
						<datalist id="student_list">
							@foreach ($students as $student)
							<option value="{{$student->student_name}}">
								@endforeach
							</datalist>
							<button type="submit" class="btn btn-default" >Go</button> 

						</div>

					</form> 
				</div>

			</div>
		</div> -->

	</div>
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
				<span class="value">Students</span>
				<span class="value"><span><a href="/student">{{App\Student::count()}}</a></span></span>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
				<span class="value">Courses</span>
				<span class="value"><span><a href="/courses_names">{{App\Course::count()}}</a></span></span>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
				<span class="value">Teachers</span>
				<span class="value"><span><a href="/teacher">{{App\Teacher::count()}}</a></span></span>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6 ">
			<div class="rad-info-box">
				<span class="value">Results</span>
				<span class="value"><span><a href="/result">{{App\Result::count()}}</a></span></span>
			</div>
		</div>

	</div>


<!-- <div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-info">
		<div class="panel-heading ">عدد الطلاب : <a href="/student">{{App\Student::count()}}</a></div>
		<div class="panel-body">
		</div>
	</div>
</div>
<div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-danger">
		<div class="panel-heading ">عدد الكورسات : <a href="/courses_names">{{App\Course::count()}}</a></div>
		<div class="panel-body">
		</div>
	</div>
</div>
<div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-warning">
		<div class="panel-heading ">عدد الأساتذة : <a href="/teacher">{{App\Teacher::count()}}</a></div>
		<div class="panel-body">
		</div>
	</div>
</div>
<div class="col-sm-3 text-right" >
	<div class="panel-inverse panel-success">
		<div class="panel-heading "><a href="/result">{{App\Result::count()}}</a></div>
		<div class="panel-body">
		</div>
	</div>
</div> -->

<div class="row">
	<div class="col-sm-6 ">
		<!-- <div class=".col-sm-8 pull-left">
			<div class=" col-sm-6 pull-left">
				<form action="" class="form-inline pull-left ">
					<div class="form-group">
						<input list="student_list" id="stdls" placeholder="بحث عن طالب" name="student" class="form-control input-md">
						<datalist id="">
							@foreach ($students as $student)
							<option value="{{$student->student_name}}">
								@endforeach
							</datalist>
							<button type="submit" class="btn btn-default" >Go</button> 

						</div>

					</form> 
				</div>
				<div class=" col-sm-6 pull-left">
					<form class="form-inline pull-right ">
						<div class="form-group">

							<input list="course_list" id="stdls" placeholder="بحث عن كورس" name="course_list" class="form-control input-md">
							<datalist id="course_list">
								@foreach ($courses as $course)
								<option value="{{App\CourseName::find($course->courses_names_id)->course_name}}">
									@endforeach
								</datalist>
								<button type="submit" class="btn btn-default" >Go</button> 


							</div>
						</form> 
					</div>
				</div> 
				<div class="col-sm-8 pull-left">
					<br><br>
				</div> -->

				<div class="panel panel-info">
					<div class="panel-heading "><h3>Teachers Dues</h3> </div>
					<div class="panel-body">

						<table  class="order-table table" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact Number</th>


								</tr>
							</thead>
							<tbody>
								@foreach($teachers as $teacher)
								<tr>
									<td><a href="{{ URL::to('teacher/' . $teacher->id ) }}" class="" >{{$teacher->teacher_name}}</a></td>
									<td>{{$teacher->teacher_contact_number}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@if(App\Teacher::count() > 5)
						<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='{{ url ('teachers_claims') }}'" value="more..." />
						@else
						@endif
						@if(App\Teacher::count() >1)
						<div class="panel-footer">{{App\Teacher::count()}} Teachers</div>
						@else
						<div class="panel-footer">{{App\Teacher::count()}} Teacher</div>
						@endif
					</div>
				</div>
				<div class="panel panel-success" style="width: 550px;
				height: 250px;
				overflow: scroll;
				overflow-x: hidden " >
				<div class="panel-heading "><h3>Active Courses</h3></div>
				<div class="panel-body">
					@foreach ($courses as $course)
					@if($course->course_status == 1)
					<a href="{{ URL::to('course/' . $course->id) }}">
						<div class="col-sm-4">

							<div class="panel panel-success">
								<div class="panel-heading ">{{App\CourseName::find($course->courses_names_id)->course_name}}</div>
								<div class="panel-body">
								</div>

							</div>
						</div>
						@else
						@endif
						@endforeach

					</a>
				</div>{{--<div >{{ $courses->links() }}</div>--}}</div>
				
				

				<div class="panel panel-info" style="width: 550px;
				height: 250px;
				overflow: scroll;
				overflow-x: hidden ">
				<div class="panel-heading "><h3>Suggested Courses</h3></div>
				<div class="panel-body">
					@foreach ($courses as $course)
					@if($course->course_status == 0)
					<a href="{{ URL::to('course/' . $course->id) }}">
						<div class="col-sm-4">

							<div class="panel panel-info">
								<div class="panel-heading ">{{App\CourseName::find($course->courses_names_id)->course_name}}</div>
								<div class="panel-body">
								</div>

							</div>
						</div>
						@else
						@endif
						@endforeach
					</div>
				</a>
			</div>
			<div class="panel panel-danger" style="width: 550px;
			height: 250px;
			overflow: scroll;
			overflow-x: hidden ">
			<div class="panel-heading "><h3>Finshed Courses</h3></div>
			<div class="panel-body">
				@foreach ($courses as $course)
				@if($course->course_status == 2)
				<a href="{{ URL::to('course/' . $course->id) }}">
					<div class="col-sm-4">

						<div class="panel panel-danger">
							<div class="panel-heading ">{{App\CourseName::find($course->courses_names_id)->course_name}}</div>
							<div class="panel-body">
							</div>

						</div>
					</div>
					@else
					@endif
					@endforeach
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-6 ">
		<div class=".col-sm-4 " >


			<div class="panel panel-danger">

				<div class="panel-heading "><h3>Students Debts (Active Courses)</h3></div>
				<div class="panel-body">


					<table  class="order-table table" >
						<thead>
							<tr>
								<th>Name</th>
								<th>Contact Number</th>
								<th>Course</th>
								<th>Remain</th>



							</tr>
						</thead>
						<tbody>

							<?php 
							$count=0;
							foreach ($collects as $collect) {
								$course_col = App\Course::where('id','=',$collect->course_id)->where('course_status','=',"1")->get();
								foreach ($course_col as $courseol) {

									$course_cost = $courseol->course_cost;
									$obtained = $collect->obtained;
								}
								if ($obtained < $course_cost) {
									$student_due = App\Collect::where('obtained','=',$obtained)->where('student_id','=',$collect->student_id)->where('course_id','=',$collect->course_id)->get();
									$left_out = $course_cost - $obtained;

								}
								else{
									$student_due = null;
								} ?>
								@if($student_due != null)
								@foreach($student_due as $student_due)
								<?php $student_leftout = App\Student::where('id','=',$student_due->student_id)->first();
								$course = $courseol;
								$count++;
								//echo $courseol;

								?>

								@if($count >5 )
								<?php break; ?>
								@endif


								<tr>
									<td><a href="{{ URL::to('student/' . $student_leftout->id ) }}" class="">{{$student_leftout->student_name}}</a></td>
									<td>{{$student_leftout->student_contact_number}}</td>
									<td>{{App\CourseName::find($course->courses_names_id)->course_name}}</td>
									<td>{{$left_out}}</td>
								</tr>
								

								@endforeach
								@else
								@endif
								<?php  } ?>

							</tbody>
						</table>
						@if($count > 5)
						<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='{{ url ('students_debts') }}'" value="more..." />
						@else
						@endif
					</div>
					{{--<div >{{ $collects->links() }}</div>--}}
					@if($count > 1)
					<div class="panel-footer">{{$count}} Students</div>
					@else
					<div class="panel-footer">{{$count}} Student</div>
					@endif
				</div>

				<div class="panel panel-danger">

					<div class="panel-heading "><h3>Students Debts (Finshed Courses)</h3></div>
					<div class="panel-body">


						<table  class="order-table table" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact Number</th>
									<th>Course</th>
									<th>Remain</th>



								</tr>
							</thead>
							<tbody>

								<?php 
								$fcount=0;
								foreach ($collects as $collect) {
									$course_col = App\Course::where('id','=',$collect->course_id)->get();
									foreach ($course_col as $courseol) {

										$course_cost = $courseol->course_cost;
										$obtained = $collect->obtained;
									}
									if ($obtained < $course_cost) {
										$student_due = App\Collect::where('obtained','=',$obtained)->where('student_id','=',$collect->student_id)->where('course_id','=',$collect->course_id)->get();
										$left_out = $course_cost - $obtained;

									}
									else{
										$student_due = null;
									} ?>
									@if($student_due != null)
									@foreach($student_due as $student_due)
									<?php $student_leftout = App\Student::where('id','=',$student_due->student_id)->first();
									$course = App\Course::where('id','=',$student_due->course_id)->first();


									?>

									@if($fcount >5 )
									<?php break; ?>
									@endif

									@if($course->course_status == 2)
									<tr>
										<td><a href="{{ URL::to('student/' . $student_leftout->id ) }}" class="">{{$student_leftout->student_name}}</a></td>
										<td>{{$student_leftout->student_contact_number}}</td>
										<td>  {{App\CourseName::find($course->courses_names_id)->course_name}}</td>
										<td>{{$left_out}}</td>
										<?php $fcount++;?>
									</tr>
									@else

									@endif

									@endforeach
									@else
									@endif
									<?php  } ?>

								</tbody>
							</table>
							@if($fcount > 5)
							<input type="button" class="btn btn-default pull-right " float="right" onclick="location.href='{{ url ('finshed_students_debts') }}'" value="more..." />
							@else
							@endif
						</div>
						{{--<div >{{ $collects->links() }}</div>--}}
						@if($fcount > 1)
						<div class="panel-footer">{{$fcount}} Students</div>
						@else
						<div class="panel-footer">{{$fcount}} Student</div>
						@endif
					</div>


				</div> 
			</div>
		</div>
<!-- <script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-table.js')}}"></script>
<script src="{{asset('js/bootstrap-table-editable.js')}}"></script>
<script src="{{asset('js/bootstrap-table-export.js')}}"></script>
<script src="{{asset('js/bootstrapfilter.js')}}"></script> -->

@stop