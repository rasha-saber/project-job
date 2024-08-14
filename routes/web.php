<?php

use App\Http\Controllers\jobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [jobsController::class, 'index'])->name('index');