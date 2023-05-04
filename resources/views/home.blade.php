<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-model-controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <h1>Movies</h1>
        <ul>
        @foreach ($movies as $movie)
            <li>
                <div>
                    <p>Title: {{ $movie->title }}</a></p>
                    <p>id: {{ $movie->id }}</p>
                    <p>oiginal_title: {{ $movie->original_title }}</p>
                    <p>date: {{ $movie->date }}</p>
                    <p>vote: {{ $movie->vote }}</p>
                </div>
            </li>
        @endforeach
        </ul>
    </body>
</html>
