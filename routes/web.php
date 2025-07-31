<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
