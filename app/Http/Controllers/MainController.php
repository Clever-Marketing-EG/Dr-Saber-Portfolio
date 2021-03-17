<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function main()
    {
        return view('main.home');
    }


    public function test() {
        dd(App::currentLocale());
    }


    public function biography()
    {
        return view('main.biography');
    }

    public function contact()
    {
        return view('main.contact');
    }

}
