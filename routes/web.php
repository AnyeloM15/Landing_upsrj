<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPrincipal;


Route::get('/', [controladorPrincipal::class, 'index'])->name('index');
Route::get('about', [controladorPrincipal::class, 'about'])->name('about.index');
Route::get('blog', [controladorPrincipal::class, 'blog'])->name('blog.index');
Route::get('blog_single', [controladorPrincipal::class, 'blog_single'])->name('blog_single.index');
Route::get('contact', [controladorPrincipal::class, 'contact'])->name('contact.index');
Route::get('course', [controladorPrincipal::class, 'course'])->name('course.index');
Route::get('courses', [controladorPrincipal::class, 'courses'])->name('courses.index');



