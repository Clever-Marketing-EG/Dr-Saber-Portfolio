<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return View
     */
    public function show(Article $article): View
    {
        $article->load('images');
        return view('articles.show', ['article' => $article]);
    }

//    TODO
//    public function search(Request $request)
//    {
//        $request->validate([
//            'term' => 'required|string|min:3'
//        ]);
//
//        dd($request['term']);
//    }
}
