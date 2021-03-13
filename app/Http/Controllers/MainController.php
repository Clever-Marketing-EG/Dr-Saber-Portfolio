<?php

namespace App\Http\Controllers;


use App\Models\Article;

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

}
