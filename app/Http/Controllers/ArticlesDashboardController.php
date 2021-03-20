<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function add()
    {
        return view('dashboard.articles.add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string'
        ]);
        $article = Article::create($validated);
        return redirect()->route('dashboard.index');
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'min:3|string',
            'title_ar' => 'min:3|string',
            'content' => 'min:3|text',
            'content_ar' => 'min:3|text'
        ]);
        $article->update($validated);
        toast('Edited successfully!', 'success');
        return redirect()->route('dashboard.index');
    }

    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', ['article' => $article]);
    }
    /**
     * @param Article $article
     * @return RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();
        toast('Deleted', 'error');
        return redirect()->back();
    }
}
