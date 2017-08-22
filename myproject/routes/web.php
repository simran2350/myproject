<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/student', 'StudentController@index')->name('student.dashboard');

Route::get('/details', 'StudentController@index1')->name('student.details');
//Route::post('/store', 'DetailsController@store');


Route::get('/course', 'StudentController@index2')->name('student.course');
//Route::post('/store', 'CourseController@store');

Route::get('/internship', 'StudentController@index3')->name('student.internship');
Route::post('/store', 'InternshipController@store');

Route::get('/job', 'StudentController@index4')->name('student.job');
//Route::post('/store', 'JobController@store');

Route::get('/studentdetails', 'StudentController@index5')->name('student.showdetails');


Route::get('/users/logout', ['as'=>'userlogout','uses'=>'Auth\LoginController@userLogout']);

Route::prefix('staff')->group(function() {
  Route::get('/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
  Route::post('/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
  Route::get('/', 'StaffController@index')->name('staff.dashboard');
  Route::get('/logout', 'Auth\StaffLoginController@logout')->name('staff.logout');
});

	Route::get('/email','StaffController@index1');
	//Route::get('/staff','StaffController@semail')->name('sendemail');
	Route::get('/emailshow','StaffController@getemail');
	
	Route::get('/all','StaffController@all');
    Route::get('/withopenjob','StaffController@withopenjob');
	Route::get('/sc','StaffController@sc');
	Route::get('/withjob','StaffController@withjob');
	Route::get('/woj','StaffController@woj');
	Route::get('/avcgpa','StaffController@avcgpa');
	Route::get('/cjy','StaffController@cjy');
	Route::get('/withjobyear','StaffController@withjobyear');
	Route::get('/withoutjobyear','StaffController@withoutjobyear');
	Route::get('/employers','StaffController@employers');
	
  Route::prefix('faculty')->group(function() {
  Route::get('/login', 'Auth\FacultyLoginController@showLoginForm')->name('faculty.login');
  Route::post('/login', 'Auth\FacultyLoginController@login')->name('faculty.login.submit');
  Route::get('/', 'FacultyController@index')->name('faculty.dashboard');
  Route::get('/logout', 'Auth\FacultyLoginController@logout')->name('faculty.logout');
});
	Route::get('/allf','FacultyController@allf');
