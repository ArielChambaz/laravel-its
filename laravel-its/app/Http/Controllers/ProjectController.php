<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class ProjectController extends Controller
{
    public function index()
    {
        $faker = Faker::create();

        // Générer des faux projets avec Faker
        $projects = [];
        for ($i = 0; $i < 10; $i++) {
            $projects[] = [
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
            ];
        }

        // Passer les projets à la vue
        return view('projects', ['projects' => $projects]);
    }
}