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
    <div class="mt-4">
        @foreach ($projects as $project)
            <x-project-description :title="$project['title']" :description="$project['description']" />
        @endforeach
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>