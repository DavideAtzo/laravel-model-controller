<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-model-controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="my-2">
                    <h1>Movies</h1>
                </div>
                <ul class="list-unstyled d-flex justify-content-between flex-wrap gap-2">
                    @foreach ($movies as $movie)
                        <li class="card col-3">
                            <div class="card-body">
                                <h5>Title: {{ $movie->title }}</h5>
                                <p>id: {{ $movie->id }}</p>
                                <p>oiginal_title: {{ $movie->original_title }}</p>
                                <p>date: {{ $movie->date }}</p>
                                <p>vote: {{ $movie->vote }}</p>
                            </div>
                        </li>
                    @endforeach
                    </ul>
            </div>
        </div>
    </body>
</html>
