<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
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
        $media = Media::paginate(12);
        return view('media.index', ['media' => $media]);
    }

}
