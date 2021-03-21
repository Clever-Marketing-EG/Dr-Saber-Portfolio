<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    /**
     * Upload an image
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function upload(Request $request): RedirectResponse
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
        $article = Article::find($request['article_id']);
        $article->images()->save($image);
        return redirect()->back()->with('success', 'Image Uploaded successfully');
    }

}
