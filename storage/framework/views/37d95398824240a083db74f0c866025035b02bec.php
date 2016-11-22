<link rel="stylesheet" href="<?php echo e(asset("css/report.css")); ?>" />
<header class="clearfix">

	<h1>Nora</h1>
	<!-- <img src="<?php echo e(asset("assets/img/3.png")); ?>"> -->
	

	<h1>FINANCAIL CLEARANCE SLIP</h1>
</header>
<main>
	<h2>Student Number : <?php echo e($student->id); ?></h2>
	<h2>Student Name : <?php echo e($student->student_name); ?></h2>
	<h2>Course Number : <?php echo e($course->id); ?></h2>
	<h2>Course Name : <?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></h2>
	<h2>Course Cost : <?php echo e($course->course_cost); ?> </h2>
	<h2>Obtained : <?php echo e($col_obtained); ?> </h2>
	<h2>Remained : <?php echo e($course->course_cost - $col_obtained); ?> </h2>
	<p>Register's name : <?php echo e(Auth::user()->name); ?></p>
	<p>Register's sign </p>
</main>
<br><br><br><br>
<h1></h1>
<header class="clearfix">
	
	<h1>Nora</h1>
	<!-- <img src="<?php echo e(asset("assets/img/3.png")); ?>"> -->
	

	<h1>FINANCAIL CLEARANCE SLIP</h1>
</header>
<main>
	<h2>Student Number  : <?php echo e($student->id); ?></h2>
	<h2>Student Name : <?php echo e($student->student_name); ?></h2>
	<h2>Course Number : <?php echo e($course->id); ?></h2>
	<h2>Course Name : <?php echo e(App\CourseName::find($course->courses_names_id)->course_name); ?></h2>
	<h2>Course Cost : <?php echo e($course->course_cost); ?> </h2>
	<h2>Obtained  : <?php echo e($col_obtained); ?> </h2>
	<h2>اRemained : <?php echo e($course->course_cost - $col_obtained); ?> </h2>
	<p>Register's name : <?php echo e(Auth::user()->name); ?></p>
	<p>Register's sign </p>
</main>