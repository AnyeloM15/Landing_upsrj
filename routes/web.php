<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPrincipal;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::get('/', [controladorPrincipal::class, 'index'])->name('index');
Route::get('about', [controladorPrincipal::class, 'about'])->name('about.index');
Route::get('blog', [controladorPrincipal::class, 'blog'])->name('blog.index');
Route::get('blog_single', [controladorPrincipal::class, 'blog_single'])->name('blog_single.index');
Route::get('contact', [controladorPrincipal::class, 'contact'])->name('contact.index');
Route::get('course', [controladorPrincipal::class, 'course'])->name('course.index');
Route::get('courses', [controladorPrincipal::class, 'courses'])->name('courses.index');


