<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/courses', [WebController::class, 'courses'])->name('web.courses');
Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
