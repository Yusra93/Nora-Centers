<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Teacher;
use App\Course;
use App\Student;
use \Session;

class TeacherController extends Controller
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
        $teachers = Teacher::all();
return view('teacher.view',compact('students',$students,'teachers',$teachers));
              
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function teachers_claims()
    {
      $students = Student::all();
        $teachers = Teacher::all();
return view('teachers_claims',compact('students',$students,'teachers',$teachers));
              
    }
    
    public function create()
    {   $students = Student::all();

        $teachers = Teacher::all();
      return view('teacher.add',compact('students',$students,'teachers',$teachers));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $teacher_name = $request->input('teacher_name');
      $teacher_address = $request->input('teacher_address');
      $teacher_identity_number = $request->input('teacher_identity_number');
      $teacher_email = $request->input('teacher_email');
      $teacher_contact_number = $request->input('teacher_contact_number');

      $new_teacher = new Teacher;
      $new_teacher->teacher_name = $request->teacher_name;
      $new_teacher->teacher_address = $request->teacher_address;
      $new_teacher->teacher_identity_number = $request->teacher_identity_number;
      $new_teacher->teacher_email = $request->teacher_email;
      $new_teacher->teacher_contact_number = $request->teacher_contact_number;
      $new_teacher->save();
      Session::flash('message', 'You have successfully added teacher');
      return redirect('teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::all();

        $teacher = Teacher::find($id);
      return view('teacher.details',compact('students',$students,'teacher',$teacher));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $students = Student::all();

        $teacher = Teacher::find($id);
      return view('teacher.edit',compact('students',$students,'teacher',$teacher));
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
      $teacher_name = $request->input('teacher_name');
      $teacher_address = $request->input('teacher_address');
      $teacher_identity_number = $request->input('teacher_identity_number');
      $teacher_email = $request->input('teacher_email');
      $teacher_contact_number = $request->input('teacher_contact_number');

      $new_teacher = Teacher::find($id);
      $new_teacher->teacher_name = $request->teacher_name;
      $new_teacher->teacher_address = $request->teacher_address;
      $new_teacher->teacher_identity_number = $request->teacher_identity_number;
      $new_teacher->teacher_email = $request->teacher_email;
      $new_teacher->teacher_contact_number = $request->teacher_contact_number;
      $new_teacher->save();
      Session::flash('message', 'You have successfully updated teacher');
      return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id)->delete();
        Session::flash('message', 'You have successfully deleted teacher');
      return redirect('teacher');
    }
}
