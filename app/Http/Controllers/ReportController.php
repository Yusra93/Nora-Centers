<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Teacher;
use App\Course;
use App\Result;

class ReportController extends Controller
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
        $students = Student::all();

        return view('report',compact('students',$students));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//***************************Students***************************//
public function students(Request $request)
  {
     $input = $request->all();
    $from_date = $input['from_date'];
    $to_date = $input['to_date'];

    $students = Student::where('created_at','>=',$from_date." 00:00:00")->where('updated_at','<=',$to_date." 23:59:59")->get();
    
    return view('report.students',compact('students',$students,'input',$input));
  }
//***************************Teachers***************************//

  public function teachers(Request $request)
  {

    $input = $request->all();
    $from_date = $input['from_date'];
    $to_date = $input['to_date'];

    $teachers = Teacher::where('created_at','>=',$from_date." 00:00:00")->where('updated_at','<=',$to_date." 00:00:00")->get();

    
    return view('report.teachers',compact('teachers',$teachers,'input',$input));
  }
//***************************Courses***************************//
  public function courses(Request $request)
  {
     $input = $request->all();
    $from_date = $input['from_date'];
    $to_date = $input['to_date'];

    $courses = Course::where('created_at','>=',$from_date." 00:00:00")->where('updated_at','<=',$to_date." 00:00:00")->get();

    
    return view('report.courses',compact('courses',$courses,'input',$input));
  }
//***************************Results***************************//

  public function results(Request $request)
  {

    $input = $request->all();
    $from_date = $input['from_date'];
    $to_date = $input['to_date'];

    $results = Result::where('created_at','>=',$from_date." 00:00:00")->where('updated_at','<=',$to_date." 00:00:00")->get();

    
    return view('report.results',compact('results',$results,'input',$input));
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
    public function edit($id)
    {
        //
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
        //
    }
}
