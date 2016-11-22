<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Teacher;
use App\Course;
use App\Collect;
use DB;
use Auth;
use App\User;
use DateTime;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('created_at', 'DESC')->get()->all();
        $collects = Collect::all();
        $teachers = Teacher::all();
        $courses = Course::all();
        //$courses = Course::paginate(3);
        //foreach ($students as $student) {
        //     foreach ($collects as $collect) {
        //        $course_col = Course::where('id','=',$collect->course_id)->get();
        //        foreach ($course_col as $courseol) {
        //            $course_cost = $courseol->course_cost;
        //            $obtained = $collect->obtained;
        //      //echo "$obtained";  }
        //            if ($obtained < $course_cost) {
        //             $student_due = Collect::where('obtained','=',$obtained)->get();
        //             //echo "$student_due <br>";
        //             $left_out = $course_cost - $obtained;
        //         //echo "$course_cost <br>";

        //         //}
        //     }
        // }
        // echo "$student_due <br>";
    // }
        foreach ($courses as $course) {
            if ($course->course_begin == null) {
              
            }
            else{
                // %y years %m months %a days %h hours %i minutes %S seconds
                // $current_date = new DateTime();
                // $course_begin = $course->course_begin;
                // $course_end = new DateTime(($course->course_end));
                // $course_period = $current_date->diff($course_end);
                // echo $course_begin ."________".$course->course_end."<br>"."<br>";
                // echo $current_date->format('Y-m-d')."________".$course->course_end."<br>"."<br>";
                // echo "__________".$course_period->format('%a days %h hours')."____________"."<br>"."<br>";
                

            }
            
        }
    return view('welcome',compact('students',$students,'collects',$collects,'teachers',$teachers,'courses',$courses));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


public function edit($id)
    {   $students = Student::all();
        $user = User::find($id);
        return view('users.edit',compact('user', $user,'students',$students));
    }
    
    public function control()
    {
        if (Auth::user()->role == 3) 
        {
            return redirect('/'); 
        }
        
        $students = Student::all();
        $users = DB::table('users')->get();
        return view('setting.control', compact('users',$users,'students',$students));
    }

    public function updateRole(Request $request, User $user)
    {

        $user->update($request->all());
        return redirect('user');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
