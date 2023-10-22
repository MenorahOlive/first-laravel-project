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
/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about');
});*/

//Static Pages Controller routes
Route :: get('/','App\Http\Controllers\StaticPagesController@root');
Route :: get('/test','App\Http\Controllers\StaticPagesController@test');
Route :: get('/about','App\Http\Controllers\StaticPagesController@about');

//lecturers request controller routes
Route :: get('/lecturers/units', 'App\Http\Controllers\LecturerController@units');
Route :: get('/lecturers/classes','App\Http\Controllers\LecturerController@classes');
Route :: get('/lecturers/timetable','App\Http\Controllers\LecturerController@timetable');

//students request controller routes
Route :: get('/students/timetable','App\Http\Controllers\StudentController@timetable');
Route :: get('/students/units','App\Http\Controllers\StudentController@units');
Route :: get('/students','App\Http\Controllers\StudentController@show_student_leaders');


//students request controller routes
Route :: get('/computers','App\Http\Controllers\ComputerController@show_computers');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
