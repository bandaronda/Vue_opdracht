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
        <h1>Kinsta Blog</h1>
    </header>
    <main>
        <h2>Read our latest articles</h2>
        <section>
            @foreach($articles as $article)
            <article>
                <div>
                    <img src="{{ asset('images/kinsta-logo.png') }}" alt="Article thumbnail" />
                </div>
                <h3>{{ $article->title }}</h3>
                <p>{{ $article->excerpt }}</p>
                <a href="{{ route('article.show', $article->id) }}">Read more</a>
            </article>
            @endforeach
        </section>
    </main>
    <footer>
        <h2>Join our Newsletter</h2>
        <input type="email" />
    </footer>
</body>
</html>
