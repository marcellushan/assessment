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

Route::resource('goal', 'GoalController');
Route::resource('course', 'CourseController');
Route::resource('assessor', 'AssessorController');
Route::resource('slo', 'SloController');

//Assessment
Route::resource('assessment', 'AssessmentController', ['except' => ['create']]);
Route::get('assessment/create/{team_id}/{assessor_id}', 'AssessmentController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
