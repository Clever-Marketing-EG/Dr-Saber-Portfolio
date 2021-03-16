<?php

namespace App\Http\Controllers;

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
        $articles = Article::paginate(5);
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        //TODO: create a form for articles
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //TODO handle store Articles
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return View
     */
    public function show(Article $article)
    {
        $article->load('images');
        return view('articles.show', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return Response
     */
    public function destroy(Article $article)
    {
        //
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
