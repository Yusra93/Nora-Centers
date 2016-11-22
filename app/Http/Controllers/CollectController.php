<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Collect;
use App\Course;
use App\CourseName;
use App\Teacher;
use App\CourseComponent;
use App\Student;
use App\CourseandStudent;
use App\Result;
use App\Degree;


class CollectController extends Controller
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

      $collects = Collect::all();
      return view('collect',compact('students',$students));
    }

    public function go_to_collect($sid, $cid)
    {
     $students = Student::all();

     $course = Course::find($cid);
     $student = Student::find($sid);
     $collect = Collect::where('student_id','=',$student->id)->where('course_id','=',$course->id)->first();
     $students = CourseandStudent::where('course_id','=', $cid)->get();
     $course_components=CourseComponent::where('course_id','=', $cid)->get(); 
     $totaldegree = Result::where('course_id','=', $cid)->where('student_id','=',$sid)->first(); 
     foreach ($course_components as $course_component) {
         $course_degrees= Degree::where('student_id','=',$student->id)->where('course_id','=',$course_component->course_id)->get();
        
     }
     
     
    
      // return view('final_result',compact('students',$students,'course_components',$course_components,'cid',$cid,'total',$total));
     if ($collect === null) {
         $col_obtained=0;
     } else{
        $col_obtained=$collect->obtained;
     }
     
     if ($totaldegree === null) {
         $total =0 ;
     } else {
        $total = $totaldegree->total_degree;
        
     }
     
    if ($course->course_status >= 1) {
        
    
    
        return view('collect',compact('students',$students,'student',$sid,'course',$cid,"col_obtained",$col_obtained,'course_components',$course_components,'total',$total,'course_degrees',$course_degrees));}
        else
            echo "This is not an Active Course";
    }

    public function go_to_colprint($sid, $cid)
    {
     $course = Course::find($cid);
     $student = Student::find($sid);
     $collect = Collect::where('student_id','=',$student->id)->where('course_id','=',$course->id)->first();
     $students = CourseandStudent::where('course_id','=', $cid)->get();
     $course_components=CourseComponent::where('course_id','=', $cid)->get(); 
     $totaldegree = Result::where('course_id','=', $cid)->where('student_id','=',$sid)->first(); 
     foreach ($course_components as $course_component) {
         $course_degrees= Degree::where('student_id','=',$student->id)->where('course_id','=',$course_component->course_id)->get();
        
     }
     
     
    
      // return view('final_result',compact('students',$students,'course_components',$course_components,'cid',$cid,'total',$total));
     if ($collect === null) {
         $col_obtained=0;
     } else{
        $col_obtained=$collect->obtained;
     }
     
     if ($totaldegree === null) {
         $total =0 ;
     } else {
        $total = $totaldegree->total_degree;
        
     }
    
    
        return view('colprint',compact('student',$sid,'course',$cid,"col_obtained",$col_obtained,'course_components',$course_components,'total',$total,'course_degrees',$course_degrees));
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
        $student_name = $request->input('student_name');
        $course_id = $request->input('course_name');
        $obtained = $request->input('obtained');
        $course_cost=$request->input('course_cost');
        $student = Student::where('student_name','=',$student_name)->get()->last();
        $student_id = $student->id;
        $collect = Collect::where('student_id','=',$student->id)->where('course_id','=',$course_id)->first();
        echo "$collect";

            if (($collect === null)&&($obtained <= $course_cost )) {
                $new_collect = new Collect;
                $new_collect->student_id = $student_id;
                $new_collect->course_id = $course_id;
                $new_collect->obtained = $obtained;
                $new_collect->save();
                return back();
            } elseif(($collect != null)&&(($obtained + $collect->obtained) <= ($course_cost ))) {
                $obtained = $collect->obtained + $obtained;
                $collect->obtained = $obtained;
                $collect->save();
                return back();
                }
            else{
                echo "ERROR !!!";
            }
        
        
        return back();

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
