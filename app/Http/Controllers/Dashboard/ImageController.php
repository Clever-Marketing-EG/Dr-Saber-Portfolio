<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Image;
use App\Models\Operation;
use App\Models\OperationImage;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index()
    {
        $images = Image::all();
        return view('dashboard.images.index', ['images' => $images]);
    }


    /**
     * update an image
     *
     * @param Request $request
     * @param Image $image
     * @return RedirectResponse
     */
    public function update(Request $request, Image $image): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $path = $request->image->store('images');
        $image['url'] = asset($path);
        $image->save();
        return redirect()->back()->with('success', 'Image updated successfully');
    }

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
        $image = new ArticleImage();
        $image['name'] = $name;
        $image['url'] = asset($path);
        $article->images()->save($image);
        return redirect()->back()->with('success', 'Image uploaded successfully');
    }


    /**
     * Delete an image of an Article
     *
     * @param ArticleImage $image
     * @return RedirectResponse
     * @throws Exception
     */
    public function deleteArticleImage(ArticleImage $image): RedirectResponse
    {
        $image->delete();
        return redirect()->back()->with('warning', 'Image deleted successfully');
    }


    /**
     * Upload image for Operation
     *
     * @param Request $request
     * @param Operation $operation
     * @return RedirectResponse
     */
    public function uploadOperationImage(Request $request, Operation $operation): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'operation_id' => 'required|exists:operations,id'
        ]);

        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $path = $request->image->store('operations_images');
        $image = new OperationImage();
        $image['name'] = $name;
        $image['url'] = asset($path);
        $operation->images()->save($image);
        return redirect()->back()->with('success', 'Image uploaded successfully');
    }

    /**
     * Delete an image of an Article
     *
     * @param OperationImage $image
     * @return RedirectResponse
     * @throws Exception
     */
    public function deleteOperationImage(OperationImage $image): RedirectResponse
    {
        $image->delete();
        return redirect()->back()->with('warning', 'Image deleted successfully');
    }

}
