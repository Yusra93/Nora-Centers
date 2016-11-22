<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Student;
use App\Course;
use App\CourseandStudent;
use App\Collect;
use App\Teacher;
use \Session;

class StudentController extends Controller
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
      return view('student.view')->withStudents($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

public function search(Request $request)
    {   $students = Student::all();
        $student_name = $request->student;
        $student_all = Student::where('student_name','=',$student_name)->get()->last();
        if ($student_all == null) {
          echo "EROOR !!!";
        }
        else
        {$student = Student::find($student_all->id);
                $courses=CourseandStudent::where('student_id','=', $student_all->id)->get();
              return view('student.details',compact('students',$students,'student',$student,'courses',$courses));}
    }
public function students_debts()
    {
        $students = Student::all();
        $collects = Collect::all();
        $teachers = Teacher::all();
        $courses = Course::all();
    return view('students_debts',compact('students',$students,'collects',$collects,'teachers',$teachers,'courses',$courses));
    }

    public function finshed_students_debts()
    {
        $students = Student::all();
        $collects = Collect::all();
        $teachers = Teacher::all();
        $courses = Course::all();
    return view('finshed_students_debts',compact('students',$students,'collects',$collects,'teachers',$teachers,'courses',$courses));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::where('result','=',0)->get();
      return view('student.add',compact('students',$students,'courses',$courses));
    }


    public function add_course($id)
    {
      $students = Student::all();

      /*$new_courseandstudent= new CourseandStudent;
      $new_courseandstudent->student_id= $request->student_id;
      $new_courseandstudent->course_id = $request->course_id;
      $new_courseandstudent->save();
      return redirect('student/$new_courseandstudent->student_id');*/              
      $courses = Course::where('result','=',0)->get();
      return view('student.add_course', compact('students',$students,'id',$id, 'courses',$courses));
    }

public function save_add_course(Request $request)
    {
      $student_id = $request->student_id;
      $course_id = $request->course_id;
      $add_course = CourseandStudent::where('student_id','=',$student_id)->where('course_id','=',$course_id)->first();

      if ($add_course === null) {
        $new_courseandstudent= new CourseandStudent;
        $new_courseandstudent->student_id= $request->student_id;
        $new_courseandstudent->course_id = $request->course_id;
        $new_courseandstudent->save();
        return redirect('student/'.$request->student_id);
      } else {
        return back();
      }
                             
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $student_name = $request->input('student_name');
      $student_address = $request->input('student_address');
      $student_specialty = $request->input('student_specialty');
      $student_educational_level = $request->input('student_educational_level');
      $student_age = $request->input('student_age');
      $student_identity_number = $request->input('student_identity_number');
      $student_email = $request->input('student_email');
      $student_contact_number = $request->input('student_contact_number');
      $course_id = $request->input('course_id');
      if (count($course_id ) != 0) {
        
      
      $new_student = new Student;
      $new_student->student_name = $request->student_name;
      $new_student->student_address = $request->student_address;
      $new_student->student_specialty = $request->student_specialty;
      $new_student->student_educational_level = $request->student_educational_level;
      $new_student->student_age = $request->student_age;
      $new_student->student_identity_number = $request->student_identity_number;
      $new_student->student_email = $request->student_email;
      $new_student->student_contact_number = $request->student_contact_number;
      $new_student->save();

      $student = Student::where('student_name','=',$request->student_name)->get()->last();

      $new_courseandstudent= new CourseandStudent;
      $new_courseandstudent->student_id=$student->id;
      $new_courseandstudent->course_id = $request->course_id;
      $new_courseandstudent->save();
      Session::flash('message', 'You have successfully added student');
      return redirect('student');}
      else{
        Session::flash('message', 'You didnot select a course');

        return back();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $students = Student::all();
        $student = Student::find($id);
        $courses=CourseandStudent::where('student_id','=', $id)->get();
      return view('student.details',compact('students',$students,'student',$student,'courses',$courses));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $students = Student::all();
        $student = Student::find($id);
      return view('student.edit',compact('student', $student,'students',$students));
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
    
      $student_name = $request->input('student_name');
      $student_address = $request->input('student_address');
      $student_specialty = $request->input('student_specialty');
      $student_educational_level = $request->input('student_educational_level');
      $student_age = $request->input('student_age');
      $student_identity_number = $request->input('student_identity_number');
      $student_email = $request->input('student_email');
      $student_contact_number = $request->input('student_contact_number');
      

      $new_student = Student::find($id);
      $new_student->student_name = $request->student_name;
      $new_student->student_address = $request->student_address;
      $new_student->student_specialty = $request->student_specialty;
      $new_student->student_educational_level = $request->student_educational_level;
      $new_student->student_age = $request->student_age;
      $new_student->student_identity_number = $request->student_identity_number;
      $new_student->student_email = $request->student_email;
      $new_student->student_contact_number = $request->student_contact_number;
      $new_student->save();
      Session::flash('message', 'You have successfully updated student');

      return redirect('student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
      Session::flash('message', 'You have successfully deleted student');

      return redirect('student');
    }
}
