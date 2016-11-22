<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Course;
use App\CourseandStudent;
use App\CourseComponent;
use App\Degree;
use App\Result;

class ResultController extends Controller
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
       
        $courses=Course::all();
        $students = Student::all();
 
        //$result= Result::where('course_id','=',$course->id)->get();
    
          return view('result',compact('students',$students,'courses',$courses));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $input = $request->all();
        $endcheck = $request->input('endcheck');
        if ($input['check'] == 0) {
           
        
        
              
          $count = 0 ;
          foreach ($input['sname'] as $student) {
              for($i=0; $i < (count($input['degrees'])/(count($input['sname'])));$i++){
              $student_names = Student::where('student_name','=',$student)->get()->last();
            $student_id_stdtable = $student_names->id;
            // $course_component_id = $input['components'][$count/(count($input['sname']))];
            $course_component_id = $input['components'][$i];
            $student_dgrtable = Degree::where('student_id','=',$student_id_stdtable)->where('course_component_id','=',$course_component_id)->first();

            $degree = $input['degrees'][$count];
            // echo "$degree <br>";
            // echo "$student <br>";
            // echo "$course_component_id";
            // $cc = count($input['sname']);
            // $co = $count / $cc;
            // echo "<br> $course_component_id";
   
            if ($student_dgrtable === null) {
              $new_degree = new Degree;
              $new_course = Course::find($request->course_id);
              $new_degree->course_id=$request->course_id  ;
              $new_degree->student_id=$student_id_stdtable;
              $new_degree->course_component_id = $course_component_id;
              $new_degree->degree = $input['degrees'][$count];
              $new_degree->save();
              if($endcheck == 1){
                $new_course->course_status = 2;
                $new_course->save();
              }
              
             
            }
            else{
              $new_course = Course::find($request->course_id);
              $student_dgrtable->course_id=$request->course_id ;           
              $student_dgrtable->student_id=$student_id_stdtable;
              $student_dgrtable->course_component_id = $course_component_id;
              $student_dgrtable->degree = $input['degrees'][$count];
              $student_dgrtable->save();
              if($endcheck == 1)
              {
                $new_course->course_status = 2;
                $new_course->save();
              }
              
               }

            
            /*echo $student_id_stdtable;
            echo $input['degrees'][$count];
            echo "<br>";*/
            $count=$count+1;

          }}
         return redirect('teacher');} 

         else {

            $count = 0 ;
          foreach ($input['sname'] as $student) {
            $degrees = 0;
              for($i=0; $i < (count($input['degrees'])/(count($input['sname'])));$i++){
            //   $student_names = Student::where('student_name','=',$student)->get()->first();
            // $student_id_stdtable = $student_names->student_id;
            $student_names = Student::where('student_name','=',$student)->get()->last();
            $student_id_stdtable = $student_names->id;    
            $course_component_id = $input['components'][$i];
            $student_dgrtable = Degree::where('student_id','=',$student_id_stdtable)->where('course_component_id','=',$course_component_id)->get();

            $degree = $input['degrees'][$count];

            $degrees = $degrees + $degree;
              
            
            $count=$count+1;

          }
          /*echo "$student_id_stdtable <br>";
          echo "$course_component_id";
          echo "<br>";
          echo "$student_dgrtable";
          echo "<br>";
          echo "$student";
          echo "<br>";
          echo "$degrees";
          echo "<br>";*/
              $new_result = new Result;
              $new_result->course_id=$request->course_id  ;
              $new_result->student_id=$student_id_stdtable;
              $new_result->total_degree = $degrees;
              $new_course = Course::find($request->course_id);
              $new_course->result = 1;
              if($endcheck == 1){
                $new_course->course_status = 2;
                
              }
              $new_result->save();
              $new_course->save();
              return redirect('teacher');

      }

          
            }
         // $result= Result::all();
          // $courses = Course::all();
          // return view('result',compact('courses',$courses));
            
    }

    public function final_result($courseid)
    {
       $students = CourseandStudent::where('course_id','=', $courseid)->get();
       $course_components=CourseComponent::where('course_id','=', $courseid)->get(); 
       $total = Result::where('course_id','= ', $courseid)->get(); 
      return view('final_result',compact('students',$students,'course_components',$course_components,'courseid',$courseid,'total',$total));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $students = CourseandStudent::where('course_id','=', $id)->get();
       $course_components=CourseComponent::where('course_id','=', $id)->get(); 
      return view('teacher.result',compact('students',$students,'course_components',$course_components,'id',$id));
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
