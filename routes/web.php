<?php

use App\Http\Controllers\jobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [jobsController::class, 'index'])->name('index');
Route::get('/about', [jobsController::class, 'indexA'])->name('about');
Route::get('/category', [jobsController::class, 'indexB'])->name('category');
Route::get('/job-detail', [jobsController::class, 'indexC'])->name('job-detail');
Route::get('/job-list', [jobsController::class, 'indexD'])->name('job-list');
Route::get('/testimonial', [jobsController::class, 'indexF'])->name('testimonial');
Route::get('/contact', [jobsController::class, 'indexG'])->name('contact');
Route::get('/test404', [jobsController::class, 'indexH'])->name('test404.indexH');