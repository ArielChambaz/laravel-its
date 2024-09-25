<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/add-projects', function () {
    return view('add-projects');
});

Route::get('/model-factories', function () {
    $articles = \App\Models\Article::all();
    return view('model-factories', compact('articles'));
});

Route::get('/n-1', [ArticleController::class, 'index']);

Route::get('/ui-exemple', function () {
    return view('ui-exemple');
});

Route::get('/search-bar', [ArticleController::class, 'search'])->name('articles.search');