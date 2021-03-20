<?php

namespace App\Http\Controllers;


use App\Models\Article;
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
        // Cookie::queue(Cookie::forever('lang', 'ar'));
        return view('main.home');
    }


    /**
     * shows biography page
     *
     * @return View
     */
    public function biography(): View
    {
        return view('main.biography');
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
