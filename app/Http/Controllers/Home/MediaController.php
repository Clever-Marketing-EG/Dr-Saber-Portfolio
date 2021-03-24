<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Media;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $media = Media::orderBy('created_at', 'desc')->paginate(12);
        $images = Image::loadImages();

        $data = array(
            'media' => $media,
            'images' => $images
        );
        return view('media.index', $data);
    }

}
