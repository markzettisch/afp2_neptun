<?php

use App\Http\Controllers\ProfileController;
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



Route::get('/', function () {
    return view('mainpage.mainpage');
})->middleware(['auth', 'verified'])->name('main');

Route::get('/indexteacher', function () {
    return view('mainpage.teachermainpage');
});


Route::get('/student/marks', function () {
    return view('mainpage.marksstudents');
});

Route::get('/teacher/marks', function () {
    return view('mainpage.marksteacher');
});

Route::get('/teacher/missing', function () {
    return view('mainpage.teachermissing');
});

Route::get('/student/missing', function () {
    return view('mainpage.missingstudents');
});

Route::get('/admin/marks', function () {
   
});
Route::get("/admin/subjects", [SubjectController::class,"showSubjects"])->name("admin.subjects");
Route::post('/admin/subjects', [SubjectController::class,'create'])->name("mysubjects");
Route::post("/admin/subject/update/{subject}", [SubjectController::class,"update"])->name("admin.subject.edit");

Route::post("/teacher/marks/update/{marks}", [MarkController::class,"update"])->name("admin.marks.edit");
Route::post("/teacher/marks/destroy/{marks}", [MarkController::class,"destroy"])->name("admin.marks.destroy");




Route::get('/teacher/mysubjects', [SubjectController::class,'indexteacher'])->name("mysubjects");

Route::get('/subjects/mysubjects', [SubjectController::class,'index'])->name("mysubjects");

Route::get('/teacher/marks', [MarkController::class,'showMarksandSubjects'])->name("mymarks");

Route::post('/teacher/marks', [MarkController::class,'create'])->name("mymarks");

Route::get('/student/marks', [MarkController::class,'index'])->name("mymarks");





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
