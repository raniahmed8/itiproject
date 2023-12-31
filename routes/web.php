<?php

use App\Http\Controllers\Admin\CourseInstructorController;
use  App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TopicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CoursesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/admin', function () {
            return view('admin.index');
        })->name('admin.index');
        Route::get('/home', function () {
            return view('front.index');
        })->name('front.index');
        Route::get('/about', function () {
            return view('front.about');
        })->name('front.about');

        Route::get('/profile', function () {
            return view('front.profile');
        })->name('front.profile');


        Route::get('/contact', function () {
            return view('front.contact');
        })->name('front.contact');
        Route::get('/courses', function () {
            return view('front.courses');
        })->name('front.courses');
        Route::get('/instructors', function () {
            return view('front.insructors');
        })->name('front.insructors');

        Route::get('/feedback', function () {
            return view('front.feedback');
        })->name('front.feedback');


        Route::group(['prefix'=>'admin'],function(){
            Route::get('students/archive',[StudentController::class,'archive'])->name('students.archive');
            Route::post('students/restore/{id}',[StudentController::class,'restore'])->name('students.restore');
            Route::delete('students/deleteArchive/{id}',[StudentController::class,'deleteArchive'])->name('students.deleteArchive');


            Route::get('instructors/createCourses/{id}',[InstructorController::class,'createCourses'])->name('instructors.createCourses');
            Route::post('instructors/addCourses',[InstructorController::class,'addCourses'])->name('instructors.addCourses');


            Route::get('students/createCourses/{id}',[StudentController::class,'createCourses'])->name('students.createCourses');
            Route::post('students/addCourses',[StudentController::class,'addCourses'])->name('students.addCourses');

            Route::get('courses/archive',[CoursesController::class,'archive'])->name('courses.archive');
            Route::post('courses/restore/{id}',[coursesController::class,'restore'])->name('courses.restore');
            Route::delete('courses/deleteArchive/{id}',[StudentController::class,'deleteArchive'])->name('courses.deleteArchive');


            Route::get('instructors/archive',[InstructorController::class,'archive'])->name('instructors.archive');
            Route::post('instructors/restore/{id}',[InstructorController::class,'restore'])->name('instructors.restore');
            Route::delete('instructors/deleteArchive/{id}',[InstructorController::class,'deleteArchive'])->name('instructors.deleteArchive');

            Route::get('departments/archive',[DepartmentController::class,'archive'])->name('departments.archive');
            Route::post('departments/restore/{id}',[DepartmentController::class,'restore'])->name('departments.restore');
            Route::delete('departments/deleteArchive/{id}',[DepartmentController::class,'deleteArchive'])->name('departments.deleteArchive');

            Route::get('topics/archive',[TopicController::class,'archive'])->name('topics.archive');
            Route::post('topics/restore/{id}',[TopicController::class,'restore'])->name('topics.restore');
            Route::delete('topics/deleteArchive/{id}',[TopicController::class,'deleteArchive'])->name('topics.deleteArchive');
            Route::resources([
                'instructors'=>InstructorController::class,
                'students'=>StudentController::class,
                'topics'=>TopicController::class,
                'departments'=>DepartmentController::class,
                'courses'=>CoursesController::class,
                'courseInstructor'=>CourseInstructorController::class,
            ]);

        });


});





