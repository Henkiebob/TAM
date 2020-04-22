<?php

use Illuminate\Support\Facades\Route;

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


Route::get('teachers', 'TeacherController@index');
Route::get('teachers/{name}', 'TeacherController@show');
Route::put('teachers/{name}', 'TeacherController@update');

Route::get('status/{name}', 'StatusController@show');

// Route::get('/teachers', function () {
//     return Teacher::all();
//     // $name = "Raymond";
//     // return App\Teacher::where('name', $name)->get();
// });

// // GET
//Route::get('teachers', 'TeacherController@index');
// Route::get('teacher/{name}', 'TeacherController@show');

// //POST & PUT
// Route::post('teacher', 'TeacherController@store');
// Route::put('teachers/{name}', 'TeacherController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
