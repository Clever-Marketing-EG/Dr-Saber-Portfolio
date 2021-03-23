<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Certificate;
use App\Models\Content;
use App\Models\Image;
use App\Models\Operation;
use App\Models\Research;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function main()
    {
        $researches = Research::latest()->take(5)->get();
        $operations = Operation::latest()->take(4)->get();
        $images = Image::loadImages();

        $data = [
            'researches' => $researches,
            'operations' => $operations,
            'images' => $images
        ];

        return view('main.home', $data);
    }


    /**
     * shows biography page
     *
     * @return View
     */
    public function biography(): View
    {
        $images = Image::loadImages();
        $certificates = Certificate::all();
        $data = array(
            'images' => $images,
            'certificates' => $certificates
        );
        return view('main.biography', $data);
    }


    /**
     * Show Contact Us Page
     *
     * @return View
     */
    public function contact(): View
    {
        return view('main.contact');
    }

}
