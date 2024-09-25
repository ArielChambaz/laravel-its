<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article; // Importez le modèle Article
use App\Models\Comment; // Importez le modèle Comment

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appel du seeder ArticleSeeder (si nécessaire)
        // $this->call(ArticleSeeder::class);

        // Créez 10 articles, chacun avec 5 commentaires
        Article::factory()
            ->count(10)
            ->has(Comment::factory()->count(5)) // Chaque article aura 5 commentaires
            ->create();
    }
}