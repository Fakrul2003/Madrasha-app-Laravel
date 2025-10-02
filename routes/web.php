<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Default Route
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard (Protected)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Students Routes
|--------------------------------------------------------------------------
*/
Route::prefix('students')->middleware('auth')->group(function () {
    Route::get('/enrollment', [StudentController::class, 'create'])->name('students.enrollment');
    Route::post('/enrollment', [StudentController::class, 'store'])->name('students.store');

    Route::get('/list', [StudentController::class, 'index'])->name('students.list');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('/update/{id}', [StudentController::class, 'update'])->name('students.update');

    // ✅ Best Practice: Delete should be DELETE method
    Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('students.delete');
});

/*
|--------------------------------------------------------------------------
| Teachers Routes
|--------------------------------------------------------------------------
*/
Route::prefix('teachers')->middleware('auth')->group(function () {
    Route::get('/enrollment', [TeacherController::class, 'create'])->name('teachers.enrollment');
    Route::post('/enrollment', [TeacherController::class, 'store'])->name('teachers.store');

    Route::get('/list', [TeacherController::class, 'index'])->name('teachers.list');
    Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::post('/update/{id}', [TeacherController::class, 'update'])->name('teachers.update');

    // ✅ Best Practice: Delete should be DELETE method
    Route::delete('/delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.delete');
});
Route::prefix('students')->middleware(['auth', 'admin'])->group(function () {
    // student routes
});

Route::prefix('teachers')->middleware(['auth', 'admin'])->group(function () {
    // teacher routes
});
