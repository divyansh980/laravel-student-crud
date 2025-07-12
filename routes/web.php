<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

// Route::get('/', function () {
//     return view('welcome');
// }
// );
