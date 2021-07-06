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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin-dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/admin-students', function () {
    return view('pages/students');
});

Route::get('/admin-studentInfo', function () {
    return view('pages/studentInfo');
});

Route::get('/admin-teachers', function () {
    return view('pages/teachers');
});

Route::get('/admin-teacherInfo', function () {
    return view('pages/teacherInfo');
});

Route::get('/admin-createTeacher', function () {
    return view('pages/addTeacher');
});

Route::get('/admin-createStudent', function () {
    return view('pages/addStudent');
});

Route::resource('eleve','App\Http\Controllers\EleveController');

Route::resource('parents','App\Http\Controllers\ParentController');

Route::resource('teacher','App\Http\Controllers\TeacherController');