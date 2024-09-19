<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Récupérer tous les projets depuis la base de données
        $projects = Project::all();

        // Passer les projets à la vue
        return view('projects', ['projects' => $projects]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Project::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect('/projects');
    }
}