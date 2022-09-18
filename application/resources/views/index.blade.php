<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Cafes</title>
        <!-- Fonts -->
        <link href="https:/
        /fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Cafes Information</h1>
        <div class='cafes'>
            @foreach ($cafes as $cafe)
                <div class='cafe'>
                    <h2 class='name'>{{ $cafe->name }}</h2>
                    <p class='body'>{{ $cafe->address }}</p>
                    <p class='body'>{{ $cafe->impression }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>