<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Content;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $contents = Content::orderBy('created_at', 'desc')->get();
        return view('dashboard.contents.index', ['contents' => $contents]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Content $content
     * @return RedirectResponse
     */
    public function update(Request $request, Content $content): RedirectResponse
    {
        $validated = $request->validate([
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
        ]);

        $content->update($validated);
        return redirect()->route('contents.index')->with('success', 'Content updated successfully!');
    }

}
