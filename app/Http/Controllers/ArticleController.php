<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::paginate(4);
        return view('articles.index', compact('categories', 'articles'));
    }

    public function category(Category $category)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', '=', $category->id)->paginate(4);
        return view('articles.index', compact('categories', 'articles'));
    }

    public function show(Article $article)
    {
        $articles = Article::where('category_id', '=', $article->category_id)->inRandomOrder()->limit(4)->get();
        $categories = Category::all();
        return view('articles.show', compact('categories', 'article', 'articles'));
    }
}
