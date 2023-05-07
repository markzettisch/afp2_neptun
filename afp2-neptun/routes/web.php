<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MarkController;
use App\Models\Subject;
use App\Models\subjects;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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
//home
Route::get('/', function () {
    return view('welcome');
});

//mainpages
Route::get('/index', function () {
    return view('mainpage.mainpage');
});

Route::get('/indexteacher', function () {
    return view('mainpage.teachermainpage');
});


Route::get('/student/marks', function () {
    return view('mainpage.marksstudents');
});

Route::get('/teacher/marks', function () {
    return view('mainpage.marksteacher');
});


Route::get('/admin/marks', function () {
   
});
Route::get("/admin/subjects", [SubjectController::class,"showSubjects"])->name("admin.subjects");
Route::post('/admin/subjects', [SubjectController::class,'create'])->name("mysubjects");
Route::post("/admin/subject/update/{subject}", [SubjectController::class,"update"])->name("admin.subject.edit");





Route::get('/teacher/mysubjects', [SubjectController::class,'indexteacher'])->name("mysubjects");

Route::get('/subjects/mysubjects', [SubjectController::class,'index'])->name("mysubjects");

Route::get('/teacher/marks', [MarkController::class,'showMarksandSubjects'])->name("mymarks");

Route::post('/teacher/marks', [MarkController::class,'create'])->name("mymarks");

Route::get('/student/marks', [MarkController::class,'index'])->name("mymarks");





//LOGIN
Route::get('/login', function () {
    return view('login');
})->name("login");
Route::get('/student-login', function () {
    return view('loginpanel.studentlogin');
})->name("student.login");
Route::get('/register-student', function () {
    return view('registerpanel.studentregister');
})->name("student.register");
Route::get('/teacher-login', function () {
    return view('loginpanel.teacherlogin');
})->name("teacher.login");
Route::get('/register-teacher', function () {
    return view('registerpanel.teacherregister');
})->name("teacher.register");


//pagesettings
Route::get('/page_settings', [PageSettingsController::class, 'show'])->name("pagesettings.show");
Route::get('/page_settings/edit', [PageSettingsController::class, 'edit'])->name("pagesettings.edit");
Route::post('/page_settings/edit', [PageSettingsController::class, 'update']);

//
//


require __DIR__.'/auth.php';

//Route::get('/login', [AuthenticatedSessionController::class, 'createStudent'])->name('studentlogin');

