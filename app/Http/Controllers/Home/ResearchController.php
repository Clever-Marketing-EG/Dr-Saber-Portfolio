<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Contracts\View\View;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $researches = Research::orderBy('created_at', 'desc')->paginate(15);
        return View('publications.index', ['researches' => $researches]);
    }

    /**
     * Display the specified resource.
     *
     * @param Research $research
     * @return View
     */
    public function show(Research $research): View
    {
        return View('publications.show', ['research' => $research]);
    }
}
