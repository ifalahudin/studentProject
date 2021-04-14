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

// Route::get('/', function () {
//     // return view('welcome');
// });

//Dashboard view( default )
Route::get('/','App\Http\Controllers\PagesController@home');
Route::get('/about','App\Http\Controllers\PagesController@about');

//Students
Route::get('/student', 'App\Http\Controllers\StudentsController@index');
Route::get('/student/create', 'App\Http\Controllers\StudentsController@create');
Route::get('/student/{student}', 'App\Http\Controllers\StudentsController@show');
Route::post('/student', 'App\Http\Controllers\StudentsController@store');