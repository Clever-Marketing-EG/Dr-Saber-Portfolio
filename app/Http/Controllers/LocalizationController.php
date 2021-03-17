<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

    class LocalizationController extends Controller
{
    public function en()
    {
        App::setLocale('en');
        session()->put('locale', 'en');
        return redirect()->back();
    }

    public function ar()
    {
        App::setLocale('ar');
        session()->put('locale', 'ar');
        return redirect()->back();
    }
}
