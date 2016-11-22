<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use App\CourseName;
use App\Teacher;
use App\CourseComponent;
use App\Student;
use App\CourseandStudent;

class CoursesController extends Controller
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
        //
    }


    /*public function search(Request $request)
    {
        $student_name = $request->student;
        $student_all = Student::where('student_name','=',$student_name)->get()->last();
        $student = Student::find($student_all->id);
        $courses=CourseandStudent::where('student_id','=', $student_all->id)->get();
      return view('student.details',compact('student',$student,'courses',$courses));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*{{-- $courses = Course::all();
                      return view('course1.add')->withCourses($courses); --}}*/
      /*$coursename = CoursesNames::find($id);                
      $teachers = Teacher::all();
      return view('course1.add')->withTeachers($teachers)->withCoursename($coursename);*/
    }

    public function addcourse($id)
    {
        /*{{-- $courses = Course::all();
                      return view('course1.add')->withCourses($courses); --}}*/
      $students = Student::all();

      $coursename = CourseName::find($id);                
      $teachers = Teacher::all();
      return view('course.add', compact('students',$students,'id',$id, 'teachers',$teachers));

      /*return view('course1.add')compact('coursename', $coursename)
      ->withTeachers($teachers)->withCoursename($coursename);*/
    }

    public function add_student($id)
    {
      /*$new_courseandstudent= new CourseandStudent;
      $new_courseandstudent->student_id= $request->student_id;
      $new_courseandstudent->course_id = $request->course_id;
      $new_courseandstudent->save();
      return redirect('student/$new_courseandstudent->student_id');*/              
      $students = Student::all();
      return view('course.add_student', compact('id',$id, 'students',$students));
    }

public function save_add_student(Request $request)
    {
      $student_id = $request->student_id;
      $course_id = $request->course_id;
      $add_course = CourseandStudent::where('student_id','=',$student_id)->where('course_id','=',$course_id)->first();

      if ($add_course === null) {
        $new_courseandstudent= new CourseandStudent;
        $new_courseandstudent->student_id= $request->student_id;
        $new_courseandstudent->course_id = $request->course_id;
        $new_courseandstudent->save();
        return redirect('course/'.$request->course_id);
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

      $courses_names_id = $request->input('course_id');
      $teacher_id = $request->input('teacher_id');
      $course_cost = $request->input('course_cost');
      $course_room = $request->input('course_room');
      $course_begin = $request->input('course_begin');
      $course_end = $request->input('course_end');
      $course_time = $request->input('course_time');
      $input = $request->all();
      $subjects[]=$request->input('subject[]');
      $course_status = $input['check'] ;
      /*///////////////////////////////////////////////////*/
      
      if ($course_status == 1) {
      $new_course = new Course;
      $new_course->courses_names_id = $request->course_id;
      $new_course->teacher_id = $request->teacher_id;
      $new_course->course_cost = $request->course_cost;
      $new_course->course_room = $request->course_room;
      $new_course->course_begin = $request->course_begin;
      $new_course->course_end = $request->course_end;
      $new_course->course_status = $course_status;
      $new_course->course_time = $course_time;
      $new_course->save();
      $course = Course::where('courses_names_id','=',$courses_names_id)->get()->last();
       $course_id = $course->id;
      for($i=0; $i < count($input['subjects']);$i++){
              $subject=$input['subjects'][$i];
              $new_course_component=new CourseComponent;
              $new_course_component->course_id=$course_id;
              $new_course_component->course_component=$subject;
              $new_course_component->save();}
              return redirect('courses_names');
      } else {
        
      $new_course = new Course;
      $new_course->courses_names_id = $request->course_id;
      $new_course->course_status = $course_status;
      $new_course->save();

              return redirect('courses_names');
      }
      
      
      /*///////////////////////////////////////////////////*/
       
          
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $students = Student::all();

        $course = Course::find($id);
        $subjects=CourseComponent::where('course_id','=', $id)->get();
      return view('course.details',compact('students',$students,'course',$course,'subjects',$subjects));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
      $coursename = CourseName::find($id);                
      $teachers = Teacher::all();
      $students = Student::all();
      $course = Course::find($id);
      $course_subjects = CourseComponent::where('course_id','=',$id)->get();
        return view('course.edit',compact('course',$course,'students',$students,'id',$id, 'teachers',$teachers,'course_subjects',$course_subjects));
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
      $courses_names_id = $request->input('course_id');
      $teacher_id = $request->input('teacher_id');
      $course_cost = $request->input('course_cost');
      $course_room = $request->input('course_room');
      $course_begin = $request->input('course_begin');
      $course_end = $request->input('course_end');
      $course_time = $request->input('course_time');
      $input = $request->all();
      $subjects[]=$request->input('subject[]');
      
      
      $new_course = Course::find($id);
      if ($new_course->course_status == 1) {
      $new_course->courses_names_id = $request->course_id;
      $new_course->teacher_id = $request->teacher_id;
      $new_course->course_cost = $request->course_cost;
      $new_course->course_room = $request->course_room;
      $new_course->course_begin = $request->course_begin;
      $new_course->course_end = $request->course_end;
      $new_course->course_time = $course_time;
      $new_course->save();
      $course = Course::where('courses_names_id','=',$courses_names_id)->get()->last();
       $course_id = $course->id;

       $new_course_components = CourseComponent::where('course_id','=',$id)->get();
              foreach ($new_course_components as $new_course_component) {
              $new_course_component->delete();
              }
      for($i=0 ; $i < count($input['subjects']) ; $i++){
              $subject=$input['subjects'][$i];
              echo "$course_id";
              $new_course_component=new CourseComponent;
              $new_course_component->course_id=$id;
              $new_course_component->course_component=$subject;
              $new_course_component->save();
              echo "$new_course_component";
            }}
            else{
              $new_course->courses_names_id = $request->course_id;
              $new_course->teacher_id = $request->teacher_id;
              $new_course->course_cost = $request->course_cost;
              $new_course->course_room = $request->course_room;
              $new_course->course_begin = $request->course_begin;
              $new_course->course_end = $request->course_end;
              $new_course->course_time = $course_time;
              $new_course->course_status = 1;
              $new_course->save();
              $course = Course::where('courses_names_id','=',$courses_names_id)->get()->last();
               $course_id = $course->id;

               $new_course_components = CourseComponent::where('course_id','=',$id)->get();
                      foreach ($new_course_components as $new_course_component) {
                      $new_course_component->delete();
                      }
              for($i=0 ; $i < count($input['subjects']) ; $i++){
                      $subject=$input['subjects'][$i];
                      echo "$course_id";
                      $new_course_component=new CourseComponent;
                      $new_course_component->course_id=$id;
                      $new_course_component->course_component=$subject;
                      $new_course_component->save();
                      echo "$new_course_component";
            }
            
            }
             return redirect('courses_names');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $course = Course::find($id)->delete();
      return redirect('courses_names');
    }
}
