@props(['title' => "Meine Hausaufgabe"])
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    </head>
   <body>
        <x-nav />
        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </body>
</html>  