<?php

namespace App\Http\Controllers\frontend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;

class ArticleController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword;

        if ($keyword) {
            $article = Article::with('Category')
                ->where('status', 1)
                ->where('title', 'like', '%' . $keyword . '%')
                ->latest()->paginate(4);
        } else {
            $article = Article::with('Category')->where('status', 1)->latest()->paginate(4);
        }

        return view('frontend.article.index', [
            'latest_post' => Article::latest()->first(),
            'article' => $article,
            'categories' => Category::latest()->get(),
            'artikel' => Article::latest()->get(),
        ]);
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $article->increment('views');
        return view('frontend.article.detail', [
            'article' => $article,
            'categories' => Category::latest()->get(),
            'artikel' => Article::latest()->get(),
        ]);
    }
}
