<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet" />

    <style>
        html,
        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.5;
            margin: 0;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f9fafb;
            color: #1a202c;
        }

        .container {
            text-align: center;
        }

        .title {
            font-size: 48px;
            font-weight: bold;
        }

        .subtitle {
            font-size: 24px;
            margin-top: 10px;
            color: #6b7280;
        }

        .links a {
            margin: 0 10px;
            text-decoration: none;
            color: #6366f1;
            font-weight: 500;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Welcome to Laravel</div>
        <div class="subtitle">The PHP Framework for Web Artisans</div>

        <div class="links" style="margin-top: 20px;">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</body>

</html>