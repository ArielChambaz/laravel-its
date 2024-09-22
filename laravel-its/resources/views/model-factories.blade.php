<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Projects</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="min-h-full">
        <x-navigation />
    </div>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Model Factories Demo</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($articles as $article)
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                    <p class="text-gray-600">{{ $article->description }}</p>
                    <p class="text-gray-500 text-sm">Published on: {{ $article->published_at }}</p>
                    <p class="text-gray-500 text-sm">Author: {{ $article->author }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>