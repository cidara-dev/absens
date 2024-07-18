<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Dashboard\ConfigController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AbsensiController::class, 'index'])->name('absensi.index');

Route::post('/', [AbsensiController::class, 'store'])->name('absensi.store');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('dashboard')->group(function () {
    Route::group(['middleware' => 'auth'], function () {

        #CONFIG
        Route::get('/config', [ConfigController::class, 'index'])->name('config.index');

        #STUDENTS
        Route::resource('/students', \App\Http\Controllers\Dashboard\StudentController::class);
        Route::get('/kelas-7', [StudentController::class, 'grade7'])->name('student.7');
        Route::get('/kelas-8', [StudentController::class, 'grade8'])->name('student.8');
        Route::get('/kelas-9', [StudentController::class, 'grade9'])->name('student.9');

        Route::resource('/attandances', \App\Http\Controllers\Dashboard\AttendanceController::class);

        // Route::resource('/students', \App\Http\Controllers\Dashboard\StudentController::class);
        // Route::get('/student/7', [StudentController::class, '7'])->name('student.7');
        // Route::get('/student/8', [StudentController::class, '8'])->name('student.8');
        // Route::get('/student/9', [StudentController::class, '9'])->name('student.9');
        Route::get('/students-list', [StudentController::class, 'students_list'])->name('students.list');
        Route::get('/students-export', [StudentController::class, 'students_export'])->name('students.export');
        Route::post('/students-list', [StudentController::class, 'students_import'])->name('students.import');


        Route::get('/development', function () {
            return view('dashboard.development');
        });
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});


require __DIR__ . '/auth.php';
