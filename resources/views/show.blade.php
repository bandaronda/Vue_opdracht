<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kinsta Blog</title>
</head>
<body>
    <header>
        <img src="{{ asset('images/kinsta-logo.png') }}" alt="Kinsta Logo" style="width: 150px;">
    </header>
    <main>
        <article>
            <div>
                <img src="{{ asset('images/kinsta-logo.png') }}" alt="Article thumbnail" />
            </div>
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->body }}</p>
        </article>
    </main>
    <footer>
        <h2>Join our Newsletter</h2>
        <input type="email" />
    </footer>
</body>
</html>
