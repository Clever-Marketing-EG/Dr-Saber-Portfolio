<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    /**
     * Upload image for Article
     *
     * @param Request $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function uploadArticleImage(Request $request, Article $article): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'article_id' => 'required|exists:articles,id'
        ]);

        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $path = $request->image->store('articles_images');
        $image = new Image();
        $image['name'] = $name;
        $image['url'] = asset($path);
        $article->images()->save($image);
        return redirect()->back()->with('success', 'Image Uploaded successfully');
    }


    /**
     * Delete an image of an Article
     *
     * @param Request $request
     * @param Image $image
     * @return RedirectResponse
     * @throws Exception
     */
    public function deleteArticlesImage(Image $image): RedirectResponse
    {
        $image->delete();
        return redirect()->back()->with('warning', 'Image deleted successfully');
    }
}
