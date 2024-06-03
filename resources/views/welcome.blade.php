<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind -->
    @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased dark:bg-orange-700">
    @foreach($blogs as $blog)
    <h1>{{$blog->judul}}</h1>
    <p>{{$blog->konten}}</p>
    @endforeach
</body>
</html>
