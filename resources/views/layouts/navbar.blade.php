<link rel="stylesheet" type="text/css" href="{{asset('css/dropdown_menu.css')}}" >
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
                    <img height="55px" width="60px" style="border-radius:50%;" src="{{asset('icon.png')}}" alt="LOGO">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url ('student') }}">Students</a>
                    </li>
                    <!-- <li class="dropdown">
                         <a class="dropbtn">Student</a>
                         <div class="dropdown-content">
                              <a href="{{ url ('addstudent') }}">Add Student</a>
                              <a href="#">Link 2</a>
                              <a href="#">Link 3</a>
                         </div>
                    </li> -->
                    <li>
                        <a href="{{ url ('teacher') }}">Teachers</a>
                    </li>
                    <li>
                        <a href="{{ url ('courses_names') }}">Courses</a>
                    </li>
                    <li>
                        <a href="{{ url ('expense') }}">Expenses</a>
                    </li>
                    <li>
                        <a href="{{ url ('result') }}">Results</a>
                    </li>
                    <li>
                        <a href="{{ url ('report') }}">Reports</a>
                    </li>

                    @if (Auth::user()->role == 1)
                    <li><a href="{{ url('/users') }}">Users</a></li>
                    @endif
                    
                    <li>
                        <a href="{{ url ('about') }}">About</a>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                      <!--  <li><a href="{{ url('/about') }}">About</a></li> 
                        <li><a href="{{ url('/register') }}">Register</a></li> -->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" >
                            <img src="{{asset('/uploads/avatars/'.Auth::user()->avatar)}}" style="width:30px; height:30px; border-radius:50%;"> 
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <!--<li><a href="{{ url('/setting') }}"><i class="fa fa-btn fa-sign-out"></i>Setting</a></li> -->
                                @if (Auth::user()->role == 1)
                                <!-- <li><a href="{{ url('/control') }}"><i class="fa fa-btn fa-sign-out"></i>Control</a></li> -->
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <form class="form-inline " action="{{ url ('/student/search') }}" method="POST" enctype="multipart/form-data" style="padding-top: 10px">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input list="student_list" placeholder="Search Student" name="student" class="form-control input-sm">
                        <datalist id="student_list">
                            @foreach ($students as $student)
                            <option value="{{$student->student_name}}">
                                @endforeach
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