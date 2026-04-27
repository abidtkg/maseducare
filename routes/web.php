<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CoursesController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\VisaController;
use Illuminate\Support\Facades\Route;

// Language switcher
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'ja', 'bn'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back()->withInput();
})->name('lang.switch');

// Public routes
Route::get('/',             [HomeController::class,    'index'])->name('home');
Route::get('/about',        [AboutController::class,   'index'])->name('about');
Route::get('/courses',      [CoursesController::class, 'index'])->name('courses');
Route::post('/enroll',      [CoursesController::class, 'enroll'])->name('enroll');
Route::get('/visa-process', [VisaController::class,    'index'])->name('visa');
Route::get('/gallery',      [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact',      [ContactController::class, 'index'])->name('contact');
Route::post('/contact',     [ContactController::class, 'send'])->name('contact.send');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/settings/{group}',  [SettingsController::class, 'show'])->name('settings.show');
    Route::post('/settings/{group}', [SettingsController::class, 'update'])->name('settings.update');

    Route::resource('team',         TeamController::class);
    Route::resource('gallery',      AdminGalleryController::class);
    Route::resource('testimonials', TestimonialController::class);

    Route::get('/enrollments',                [EnrollmentController::class, 'index'])->name('enrollments.index');
    Route::get('/enrollments/{enrollment}',   [EnrollmentController::class, 'show'])->name('enrollments.show');
    Route::patch('/enrollments/{enrollment}', [EnrollmentController::class, 'update'])->name('enrollments.update');

    Route::get('/messages',              [MessagesController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}',    [MessagesController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [MessagesController::class, 'destroy'])->name('messages.destroy');

    Route::get('/password',  [PasswordController::class, 'edit'])->name('password.edit');
    Route::post('/password', [PasswordController::class, 'update'])->name('password.update');
});

// Auth routes (login/logout only — we use a single admin account)
Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
