<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use Auth;
use App\User;
use Image;
use App\Student;

// 
use App\Http\Controllers\Controller;
//use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use \Auth, \Redirect, \Validator, \Input, \Session, \Hash;
//use Illuminate\Http\Request;

//

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->role == 3) 
        {
            return redirect('/'); 
        }
            $students = Student::all();
            $users = User::all();
            return view('users.index',compact('users', $users,'students', $students));
    }

    public function profile()
    {   
        $user = Auth::user();
        $students = Student::all();
    	return view('setting.profile', compact('user' , $user,'students', $students ));
    }

     public function update_avatar(Request $request)
    {
        $students = Student::all();
    	if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
            
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('setting.profile', compact('user' , $user,'students', $students ));
    }
/*
    public function register_user()
    {
        return redirect('/');
    }*/

    public function create()
    {   
        $students = Student::all();
            return view('users.create',compact('students', $students));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
                // store
         $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => 'min:6|max:30|confirmed',
            );
        $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) 
            {
                 return Redirect::to('users/' . 'create')
                ->withErrors($validator);
            } else {
                $users = new User;
                $users->name = $request->input('name');
                $users->email = $request->input('email');
                $users->password = Hash::make($request->input('password'));
                $users->role =$request->input('role');
                $users->save();
                return Redirect::to('users');}
                //$users->confirm_password = Hash::make(Input::get('confirm_password'));
                /*if ($request->Input('password') == $request->Input('password_confirmation') ) {
                    
                    Session::flash('message', 'You have successfully added user');
                }
                elseif($request->Input('password') != $request->Input('password_confirmation')){
                    Session::flash('message', 'password doesnot match !!!');
                    Session::flash('alert-class', 'alert-danger');
                }*/
                
                
                
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {   
        $students = Student::all();
        $user = User::find($id);
        if ($user->role == 1) {
            Session::flash('message', 'You cannot edit admin');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('users');
        }
        return view('users.edit',compact('user', $user,'students', $students));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        if($id == 1)
        {
            Session::flash('message', 'You cannot edit admin');
            Session::flash('alert-class', 'alert-danger');
                return Redirect::to('users');
        }
        else
        {   
            $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id .'',
            'password' => 'min:6|max:30|confirmed',
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) 
            {
                 return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator);
            } else {
                $users = User::find($id);
                $users->name = Input::get('name');
                $users->email = Input::get('email');
                $users->role = Input::get('role');
                if(!empty(Input::get('password'))) 
                {
                    $users->password = Hash::make(Input::get('password'));
                }
                $users->save();
                // redirect
                Session::flash('message', 'You have successfully updated user');
                return Redirect::to('users');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($id == 1 || $user->role ==1)
        {
            Session::flash('message', 'You cannot delete admin');
            Session::flash('alert-class', 'alert-danger');
                return Redirect::to('users');
        }
        else
        {       
            try 
            {
                $users = User::find($id);
                $users->delete();
                // redirect
                Session::flash('message', 'You have successfully deleted user');
                return Redirect::to('users');
            }
            catch(\Illuminate\Database\QueryException $e)
            {
                Session::flash('message', 'Integrity constraint violation: You Cannot delete a parent row');
                Session::flash('alert-class', 'alert-danger');
                return Redirect::to('users');   
            }
        }
    }
}
