<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/studentlogin', function () {
    return view('/layouts/studentlogin');
});

Route::get('/teacherlogin', function () {
    return view('/layouts/teacherlogin');
});
require __DIR__.'/auth.php';

Route::get('/login', [AuthenticatedSessionController::class, 'createStudent'])->name('studentlogin');

Route::get('/logint', [AuthenticatedSessionController::class, 'createTeacher'])->name('teacherlogin');
