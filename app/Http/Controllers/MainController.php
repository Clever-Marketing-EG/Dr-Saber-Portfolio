<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function main()
    {
        return view('main.home');
    }

    public function biography()
    {
        return view('main/biography');
    }

    public function contact()
    {
        return view('main/contact');
    }

    public function articles()
    {
        return view('main/latest-article');
    }
}
