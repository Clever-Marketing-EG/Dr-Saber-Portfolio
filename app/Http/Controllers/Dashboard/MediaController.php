<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $media = Media::paginate(30);
        return view('dashboard.media.index', ['media' => $media]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.media.create');
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
        $validated = Media::validateMedia($request);
        $mediaItem = new Media();
        $mediaItem->title = $validated['title'];
        $mediaItem->title_ar = $validated['title_ar'];
        $mediaItem->content = $validated['content'];
        $mediaItem->content_ar = $validated['content_ar'];
        $mediaItem->video_url = $validated['video_url'];
        $mediaItem->save();
        return redirect()->route('media.index')->with('success', 'Medium created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param Media $medium
     * @return View
     */
    public function show(Media $medium): View
    {
        return view('dashboard.media.show', ['medium' => $medium]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Media $medium
     * @return View
     */
    public function edit(Media $medium): View
    {
        return view('dashboard.media.edit', ['media' => $medium]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Media $medium
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Media $medium): RedirectResponse
    {
        $validated = Media::validateMedia($request);
        $medium->title = $validated['title'];
        $medium->title_ar = $validated['title_ar'];
        $medium->content = $validated['content'];
        $medium->content_ar = $validated['content_ar'];
        $medium->video_url = $validated['video_url'];
        $medium->save();
        return redirect()->route('media.index')->with('success', 'Media item created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Media $medium
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Media $medium): RedirectResponse
    {
        $medium->delete();
        return redirect()->back()->with('warning', 'Media deleted successfully');
    }
}
