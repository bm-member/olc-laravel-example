@props(['title' => 'Laravel Componet'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    
        {{ $slot }}

        <script src="/js/app.js"></script>
    </body>
</html>
