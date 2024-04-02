<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/teachers', [PagesController::class, 'teachers'])->name('teachers');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/news/{id}', [PagesController::class, 'show'])->name('news.show');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/uploadNewsArticle', [HomeController::class, 'uploadNewsArticle'])->name('news.upload');
Route::post('/store', [HomeController::class, 'store'])->name('news.store');
Route::get('/news/{id}/edit', [HomeController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [HomeController::class, 'update'])->name('news.update');
Route::delete('/news/{id}', [HomeController::class, 'destroy'])->name('news.destroy');
Route::get('/teacherCreate', [HomeController::class, 'teacherCreate'])->name('teachers.create');
Route::post('/teachers', [HomeController::class, 'teacherStore'])->name('teachers.store');
Route::get('/teachers/{id}/edit', [HomeController::class, 'editTeacher'])->name('teachers.edit');
Route::put('/teachers/{id}', [HomeController::class, 'updateTeacher'])->name('teachers.update');
Route::delete('/teacher/{id}', [HomeController::class, 'destroyTeacher'])->name('teachers.destroy');




