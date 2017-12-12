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

Route::get('/', function () {
    return view('welcome');
});

Route::resource("department", "DepartmentController");
Route::resource("course", "CourseController", ['names' => [
    'index' => 'courses.index',
    'create' => 'courses.create',
    'store' => 'courses.store',
    'show' => 'courses.show',
    'edit' => 'courses.edit',
    'destroy' => 'courses.destroy',
    'update' => 'courses.update'
]]);
