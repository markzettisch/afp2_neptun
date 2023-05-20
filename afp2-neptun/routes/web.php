<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MarkController;
use App\Models\Subject;
use App\Models\subjects;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::user()->rank_id != 0) {
        return view('mainpage.teachermainpage');
    }

    return view('mainpage.mainpage');
})->middleware(['auth', 'verified'])->name('main');



Route::get('/indexteacher', function () {
    if (Auth::user()->rank_id == 1 ) {
        return view('mainpage.teachermainpage');
    }

    return redirect('/');
})->middleware(['auth', 'verified'])->name('main');



Route::get('/student/marks', function () {

    if (Auth::user()->rank_id == 0 ) {
        return view('mainpage.marksstudents');
    }

    return redirect('/');


})->middleware(['auth', 'verified'])->name('main');



Route::get('/teacher/marks', function () {
    if (Auth::user()->rank_id == 1 ) {
        return view('mainpage.marksteacher');
    }

    if (Auth::user()->rank_id == 2 ) {
        return view('mainpage.marksadmin'); 
    }

    return redirect('/');
    

})->middleware(['auth', 'verified'])->name('main');



Route::get('/teacher/missing', function () {

    if (Auth::user()->rank_id == 1 ) {
        return view('mainpage.teachermissing');
    }

    return redirect('/');

})->middleware(['auth', 'verified'])->name('main');

Route::get('/student/missing', function () {
    if (Auth::user()->rank_id == 0 ) {
        return view('mainpage.missingstudents');
    }

    return redirect('/');


})->middleware(['auth', 'verified'])->name('main');

Route::get('/admin/marks', function () {
    if (Auth::user()->rank_id == 2 ) {
        return view('mainpage.marksadmin'); 
    }

    return redirect('/');
})->middleware(['auth', 'verified'])->name('main');

Route::get("/admin/subjects", [SubjectController::class,"showSubjects"])->name("admin.subjects");
Route::post('/admin/subjects', [SubjectController::class,'create'])->name("mysubjects");
Route::post("/admin/subject/update/{subject}", [SubjectController::class,"update"])->name("admin.subject.edit");

Route::post("/teacher/marks/update/{marks}", [MarkController::class,"update"])->name("admin.marks.edit");
Route::post("/teacher/marks/destroy/{marks}", [MarkController::class,"destroy"])->name("admin.marks.destroy");




Route::get('/teacher/mysubjects', [SubjectController::class,'indexteacher'])->name("mysubjects")->middleware(['auth', 'verified'])->name('main');

Route::get('/subjects/mysubjects', [SubjectController::class,'index'])->name("mysubjects")->middleware(['auth', 'verified'])->name('main');

Route::get('/teacher/marks', [MarkController::class,'showMarksandSubjects'])->name("mymarks")->middleware(['auth', 'verified'])->name('main');

Route::post('/teacher/marks', [MarkController::class,'create'])->name("mymarks")->middleware(['auth', 'verified'])->name('main');

Route::get('/student/marks', [MarkController::class,'index'])->name("mymarks")->middleware(['auth', 'verified'])->name('main');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
