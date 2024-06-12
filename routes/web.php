<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;


/**
 * Method HTTP:
 * 1. Get = Menampilkan halaman
 * 2. Post = mengirim data
 * 3. Put = meng-update data
 * 4. Delete = mengapus data
 */

// route untuk menampilkan teks
Route::get('/salam/{nama}', function ($nama) {
    return "Assalamualaikum $nama";
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route menampilkan student
    Route::get('admin/student', [StudentController::class, 'index']);
    // Route menampilkan student
    Route::get('admin/course', [CourseController::class, 'index']);
    // CRUD Student
    // Route untuk menampilkan form tambah student
    Route::get('admin/student/create', [StudentController::class, 'create']);
    // Route untuk mnegirim data student
    Route::post('/admin/student/store', [StudentController::class, 'store']);
    //  Route untuk edit menampilkan halaman student
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);
    // Menyimpan hasil update student
    Route::put('admin/student/update/{id}', [StudentController::class, 'update']);
    // Route untuk menghapus student
    Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);
    // CRUD Course
    // Route untuk menampilkan form tambah 
    Route::get('admin/course/create', [CourseController::class, 'create']);
    // Route untuk mnegirim data course
    Route::post('/admin/course/store', [CourseController::class, 'store']);
    //  Route untuk edit menampilkan halaman course
    Route::get('admin/course/edit/{id}', [CourseController::class, 'edit']);
    // Menyimpan hasil update course
    Route::put('admin/course/update/{id}', [CourseController::class, 'update']);
    // Route untuk menghapus course
    Route::delete('admin/course/delete/{id}', [CourseController::class, 'destroy']);
    });

require __DIR__.'/auth.php';
