<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $researches = Research::orderBy('created_at', 'desc')->paginate(30);
        return view('dashboard.researches.index', ['researches' => $researches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.researches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = Research::validateResearch($request);
        $research = Research::create($validated);
        return redirect()->route('researches.index')->with('success', 'Scientific publication created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param Research $research
     * @return View
     */
    public function show(Research $research): View
    {
        return view('dashboard.researches.show', ['research' => $research]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Research $research
     * @return View
     */
    public function edit(Research $research): View
    {
        return view('dashboard.researches.edit', ['research' => $research]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Research $research
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Research $research): RedirectResponse
    {
        $validated = Research::validateResearch($request);
        dd($validated);
        $research->title = $validated['title'];
        $research->title_ar = $validated['title_ar'];
        $research->content = $validated['content'];
        $research->content_ar = $validated['content_ar'];
        $research->video_url = $validated['video_url'];
        // $research->image_url = $validated['image_url'];
        $research->save();
        return redirect()->route('researches.index')->with('success', 'Scientific publication updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Research $research
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Research $research): RedirectResponse
    {
        $research->delete();
        return redirect()->back();
    }
}
