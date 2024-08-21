<?php

use App\Http\Controllers\jobsController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [jobsController::class, 'index'])->name('index');
Route::get('/job/create', [jobsController::class, 'create'])->name('job.create');
Route::post('/job', [jobsController::class, 'store'])->name('job.store');
Route::get('/job/{id}', [jobsController::class, 'show'])->name('job.show');
Route::get('/job/{id}/edit', [jobsController::class, 'edit'])->name('job.edit');
Route::put('/job/{id}', [jobsController::class, 'update'])->name('job.update');
Route::delete('/job/{id}', [jobsController::class, 'destroy'])->name('job.destroy');
Route::patch('/job/{id}/restore', [jobsController::class, 'restore'])->name('job.restore');
Route::delete('/job/{id}/forcedelete', [jobsController::class, 'forceDelete'])->name('job.forcedelete');




Route::get('/home', [homeController::class, 'index1'])->name('index1');
Route::get('/about', [homeController::class, 'indexA'])->name('about');
Route::get('/category', [homeController::class, 'indexB'])->name('category');
Route::get('/job-detail', [homeController::class, 'indexC'])->name('job-detail');
Route::get('/job-list', [homeController::class, 'indexD'])->name('job-list');
Route::get('/testimonial', [homeController::class, 'indexF'])->name('testimonial');
Route::get('/contact', [homeController::class, 'indexG'])->name('contact');
Route::get('/test404', [homeController::class, 'indexH'])->name('test404.indexH');
