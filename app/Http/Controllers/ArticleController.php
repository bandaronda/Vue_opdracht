<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return Inertia::render('Index', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article)
    {
        return Inertia::render('Show', [
            'article' => $article,
        ]);
    }
}
