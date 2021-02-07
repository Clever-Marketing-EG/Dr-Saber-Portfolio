<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function main()
    {
        return view('main-page/landing-page');
    }

    public function biography()
    {
        return view('main-page/biography');
    }

    public function contact()
    {
        return view('main-page/contact');
    }

    public function articles()
    {
        return view('main-page/latest-article');
    }
}
