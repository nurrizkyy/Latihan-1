<?php

use App\Livewire\Counter;
use App\Livewire\Home;
// use App\Livewire\Student;
// use App\Livewire\StudentBook;
use App\Livewire\Teacher;
use App\Livewire\TeacherBook;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
| get, put, post, delete
| 
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', Home::class);
    Route::get('/counter', Counter::class);
    Route::get('/teacher', Teacher::class);
    Route::get('/teacher-book', TeacherBook::class);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
