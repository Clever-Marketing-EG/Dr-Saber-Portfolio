<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesDashboardController extends Controller
{
    public function index() {
        $articles = Article::paginate(20);
        return view('dashboard.articles.index', ['articles' => $articles]);
    }
}
