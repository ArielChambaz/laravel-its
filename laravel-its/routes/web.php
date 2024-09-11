<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/add-projects', function () {
    return view('add-projects');
});