<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // Exemple sans chargement eager (problème N+1)
        $articlesWithoutEagerLoading = Article::all();

        // Exemple avec chargement eager (solution au problème N+1)
        $articlesWithEagerLoading = Article::with('comments')->get();

        return view('n-1', compact('articlesWithoutEagerLoading', 'articlesWithEagerLoading'));
    }

    public function search(Request $request)
    {
        $query = Article::query();

        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%");
        } else {
            // Si la barre de recherche est vide, récupérez tous les articles
            $articles = Article::all();
            return view('search-bar', compact('articles'));
        }

        $articles = $query->get();

        // Si aucun article n'est trouvé, récupérez tous les articles
        if ($articles->isEmpty()) {
            $articles = Article::all();
        }

        return view('search-bar', compact('articles'));
    }
}