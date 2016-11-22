<link rel="stylesheet" href="{{ asset('css/report.css') }}" />
<header class="clearfix">

	<div id="logo">
		<h1>Rewarding Center</h1>
		<div style="margin: auto; display: block; " >
			<img 
			src="{{asset('rewarding.jpg')}}" alt="obaaa" href="obaaa.sd">
		</div>
	</div>
	

	<h1>FINANCAIL CLEARANCE SLIP</h1>
</header>
<main>
	<h2>Student Number : {{$student->id}}</h2>
	<h2>Student Name : {{$student->student_name}}</h2>
	<h2>Course Number : {{$course->id}}</h2>
	<h2>Course Name : {{App\CourseName::find($course->courses_names_id)->course_name}}</h2>
	<h2>Course Cost : {{$course->course_cost}} </h2>
	<h2>Obtained : {{$col_obtained}} </h2>
	<h2>Remained : {{$course->course_cost - $col_obtained}} </h2>
	<p>Register's name : {{ Auth::user()->name }}</p>
	<p>Register's sign </p>
</main>
<br><br><br><br>
<h1></h1>
<header class="clearfix">
	
	<div id="logo">
		<h1>Rewarding Center</h1>
		<div style="margin: auto; display: block; " >
			<img 
			src="{{asset('rewarding.jpg')}}" alt="obaaa" href="obaaa.sd">
		</div>
	</div>
	

	<h1>FINANCAIL CLEARANCE SLIP</h1>
</header>
<main>
	<h2>Student Number  : {{$student->id}}</h2>
	<h2>Student Name : {{$student->student_name}}</h2>
	<h2>Course Number : {{$course->id}}</h2>
	<h2>Course Name : {{App\CourseName::find($course->courses_names_id)->course_name}}</h2>
	<h2>Course Cost : {{$course->course_cost}} </h2>
	<h2>Obtained  : {{$col_obtained}} </h2>
	<h2>اRemained : {{$course->course_cost - $col_obtained}} </h2>
	<p>Register's name : {{ Auth::user()->name }}</p>
	<p>Register's sign </p>
</main>