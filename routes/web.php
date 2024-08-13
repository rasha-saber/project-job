<?php

use App\Http\Controllers\jobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs', [jobsController::class, 'index'])->name('jobs.index');