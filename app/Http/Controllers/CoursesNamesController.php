<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CourseName;
use App\Course;
use App\Student;

class CoursesNamesController extends Controller
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
    {   $students = Student::all();

        $coursesnames=CourseName::all();
        $courses=Course::all();
        return view('coursenames.view',compact('students',$students,'coursesnames',$coursesnames, 'courses',$courses));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $students = Student::all();

        $coursesnames = CourseName::all();
      return view('coursenames.add',compact('students',$students,'coursenames',$coursesnames));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course_name = $request->input('course_name');
        $course_description = $request->input('course_description');
        $new_course = new CourseName;
        $new_course->course_name = $request->course_name;
        $new_course->course_description = $request->course_description;
        $new_course->save();

      return redirect('courses_names');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $students = Student::all();

        $coursename = CourseName::find($id);
      return view('coursenames.details',compact('students',$students,'coursename',$coursename));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $students = Student::all();

        $coursename = CourseName::find($id);
      return view('coursenames.details',compact('students',$students,'coursename',$coursename));
    }

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
        $coursename = CourseName::find($id)->delete();
        $coursesnames=CourseName::all();
        return view('coursenames.view')->withCoursename($coursesnames);
    }
}
