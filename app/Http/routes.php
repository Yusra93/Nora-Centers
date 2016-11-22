<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'HomeController');

Route::resource('/student', 'StudentController');

Route::post('/student/search', 'StudentController@search');

Route::resource('/courses_names', 'CoursesNamesController');

Route::resource('/course', 'CoursesController');

Route::resource('/course/search', 'CoursesController@search');

Route::resource('/teacher', 'TeacherController');

Route::resource('/expense', 'ExpenseController');

Route::resource('/result', 'ResultController');
Route::resource('/about','AboutController');

Route::get('report', 'ReportController@index');
Route::post('report/students', 'ReportController@students');
Route::post('report/teachers', 'ReportController@teachers');
Route::post('report/courses', 'ReportController@courses');
Route::post('report/results', 'ReportController@results');

Route::get('/final_result/{courseid}', 'ResultController@final_result');

Route::post('/collect', 'CollectController@store');

Route::get('/collect/{sid}/{cid}', 'CollectController@go_to_collect');

Route::get('/colprint/{sid}/{cid}', 'CollectController@go_to_colprint');

Route::get('addcourse/{id}', 'CoursesController@addcourse');

Route::get('add_course/{id}', 'StudentController@add_course');
Route::post('save_add_course', 'StudentController@save_add_course');

Route::get('add_student/{id}', 'CoursesController@add_student');
Route::post('save_add_student', 'CoursesController@save_add_student');

Route::get('students_debts', 'StudentController@students_debts');

Route::get('finshed_students_debts', 'StudentController@finshed_students_debts');

Route::get('teachers_claims', 'TeacherController@teachers_claims');

// Display Admin,Manager,Users Profiles and Controls

  Route::get('/profile', 'UserController@profile');

  Route::post('/profile', 'UserController@update_avatar');

  Route::get('/control', 'HomeController@control');

  // Update Users Roles 

// Update Users Roles 

Route::post('/update-role/{user}', 'HomeController@updateRole');

Route::get('users/{user}/edit', 'UserController@edit');

Route::post('users/{user}/update', 'HomeController@update');

//

Route::resource("/users", "UserController");

/*Route::get('/add_course/{id}', function () {
    return view('student.add_course');
});*/
//Route::resource("product", "ProductController");
/*Route::get('/course', function () {
    return view('welcome');
})->name('course');

Route::get('/query', function () {
    return view('welcome');
})->name('query');

Route::get('/collecting', function () {
    return view('welcome');
})->name('collecting');*/

Route::auth();

// Route::get('/login', 'Auth\AuthController@getLogin');
// Route::post('/login', 'Auth\AuthController@postLogin');
// Route::get('/logout', 'Auth\AuthController@getLogout');
/*Route::groub(['as'=>'admin::'],function() {

Route::get('/register', 'Auth\AuthController@getRegister');

});*/
Route::get('/logout', 'Auth\AuthController@getLogout');

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');
