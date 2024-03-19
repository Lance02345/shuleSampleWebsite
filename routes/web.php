<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/teachers', [PagesController::class, 'teachers'])->name('teachers');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

