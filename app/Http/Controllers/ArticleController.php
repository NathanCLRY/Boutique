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
        $articles = DB::table('articles')->paginate(4);
        return view('articles.index', compact('categories', 'articles'));
    }

    public function category(Category $category)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', '=', $category->id)->paginate(4);
        return view('articles.index', compact('categories', 'articles'));
    }
}
