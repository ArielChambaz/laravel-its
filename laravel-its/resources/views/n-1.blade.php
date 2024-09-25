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
        <h1 class="text-2xl font-bold mb-4">N+1 Demo</h1>
        
        @if($articlesWithoutEagerLoading->isNotEmpty())
            <h2 class="text-xl font-bold mb-4">Without Eager Loading (N+1 Problem)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($articlesWithoutEagerLoading as $article)
                    <div class="p-4 border rounded bg-red-100">
                        <h3 class="text-lg font-bold">{{ $article->title }}</h3>
                        <p>{{ $article->description }}</p>
                        <h4 class="font-bold mt-2">Comments:</h4>
                        <ul>
                            @foreach ($article->comments as $comment)
                                <li>{{ $comment->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endif

        @if($articlesWithEagerLoading->isNotEmpty())
            <h2 class="text-xl font-bold mb-4 mt-8">With Eager Loading (Solution to N+1 Problem)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($articlesWithEagerLoading as $article)
                    <div class="p-4 border rounded bg-green-100">
                        <h3 class="text-lg font-bold">{{ $article->title }}</h3>
                        <p>{{ $article->description }}</p>
                        <h4 class="font-bold mt-2">Comments:</h4>
                        <ul>
                            @foreach ($article->comments as $comment)
                                <li>{{ $comment->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>