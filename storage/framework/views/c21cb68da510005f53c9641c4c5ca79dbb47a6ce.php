<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dropdown_menu.css')); ?>" >
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img height="55px" width="60px" style="border-radius:50%;" src="<?php echo e(asset('icon.png')); ?>" alt="LOGO">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo e(url ('student')); ?>">Students</a>
                    </li>
                    <!-- <li class="dropdown">
                         <a class="dropbtn">Student</a>
                         <div class="dropdown-content">
                              <a href="<?php echo e(url ('addstudent')); ?>">Add Student</a>
                              <a href="#">Link 2</a>
                              <a href="#">Link 3</a>
                         </div>
                    </li> -->
                    <li>
                        <a href="<?php echo e(url ('teacher')); ?>">Teachers</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url ('courses_names')); ?>">Courses</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url ('expense')); ?>">Expenses</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url ('result')); ?>">Results</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url ('report')); ?>">Reports</a>
                    </li>

                    <?php if(Auth::user()->role == 1): ?>
                    <li><a href="<?php echo e(url('/users')); ?>">Users</a></li>
                    <?php endif; ?>
                    
                    <li>
                        <a href="<?php echo e(url ('about')); ?>">About</a>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                      <!--  <li><a href="<?php echo e(url('/about')); ?>">About</a></li> 
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li> -->
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" >
                            <img src="<?php echo e(asset('/uploads/avatars/'.Auth::user()->avatar)); ?>" style="width:30px; height:30px; border-radius:50%;"> 
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <!--<li><a href="<?php echo e(url('/setting')); ?>"><i class="fa fa-btn fa-sign-out"></i>Setting</a></li> -->
                                <?php if(Auth::user()->role == 1): ?>
                                <!-- <li><a href="<?php echo e(url('/control')); ?>"><i class="fa fa-btn fa-sign-out"></i>Control</a></li> -->
                                <?php endif; ?>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <form class="form-inline " action="<?php echo e(url ('/student/search')); ?>" method="POST" enctype="multipart/form-data" style="padding-top: 10px">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <input list="student_list" placeholder="Search Student" name="student" class="form-control input-sm">
                        <datalist id="student_list">
                            <?php foreach($students as $student): ?>
                            <option value="<?php echo e($student->student_name); ?>">
                                <?php endforeach; ?>
                            </datalist>
                            <button type="submit" class="btn btn-small btn-default" >Go</button> 

                        </div>

                    </form> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>