<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
}
