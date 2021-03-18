<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ArticlesDashboardController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(20);
        return view('dashboard.articles.index', ['articles' => $articles]);
    }
    public function show(Article $article)
    {
        return view('dashboard.articles.show', ['article' => $article]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            
        ]);

    }
    /**
     * @param Article $article
     * @return RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with(['success' => 'Deleted!']);
    }
}
