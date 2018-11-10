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
    return view('home');
});
// Route::get('/all', function () {
//     return view('allteacher');
// });
// Route::get('/allcourse', function () {
//     return view('allcourse');
// });
// Route::get('/allstudent', function () {
//     return view('allstudent');
// });
 Route::get('/allstudent','StudentController@show');
Route::get('/add','InstructerController@create');
 Route::get('/all','InstructerController@show');
 Route::get('/allcourse','CourseController@show');
 Route::get('/addcourse','CourseController@create');

 Route::get('/addstudent','StudentController@create');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/store','InstructerController@store');
Route::post('/storecourse','CourseController@storecourse');
 Route::post('/storestudent','StudentController@storestudent');
