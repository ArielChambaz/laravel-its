<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Exemple sans chargement eager (problème N+1)
        $articlesWithoutEagerLoading = Article::all();

        // Exemple avec chargement eager (solution au problème N+1)
        $articlesWithEagerLoading = Article::with('comments')->get();

        return view('n-1', compact('articlesWithoutEagerLoading', 'articlesWithEagerLoading'));
    }
}