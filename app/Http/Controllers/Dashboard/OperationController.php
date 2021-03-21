<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Operation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $operations = Operation::paginate(20);
        return view('dashboard.operations.index', ['operations' => $operations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.operations.create');
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
        $validated = Operation::validateOperation($request);
        $operation = new Operation();
        $operation->title = $validated['title'];
        $operation->title_ar = $validated['title_ar'];
        $operation->content = $validated['content'];
        $operation->content_ar = $validated['content_ar'];
        $operation->video_url = $validated['video_url'];
        $operation->image_url = $validated['image_url'];
        $operation->save();
        return redirect()->route('operations.index')->with('success', 'Operation created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param Operation $operation
     * @return View
     */
    public function show(Operation $operation): View
    {
        return view('dashboard.operations.show', ['operation' => $operation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Operation $operation
     * @return View
     */
    public function edit(Operation $operation): View
    {
        return view('dashboard.operations.edit', ['operation' => $operation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Operation $operation
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Operation $operation): RedirectResponse
    {
        $validated = Operation::validateOperation($request);
//        dd($validated);
        $operation->title = $validated['title'];
        $operation->title_ar = $validated['title_ar'];
        $operation->content = $validated['content'];
        $operation->content_ar = $validated['content_ar'];
        $operation->video_url = $validated['video_url'];
        $operation->image_url = $validated['image_url'];
        $operation->save();
        return redirect()->route('operations.index')->with('success', 'operation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Operation $operation
     * @return Response
     * @return RedirectResponse
     */
    public function destroy(Operation $operation): RedirectResponse
    {
        $operation->delete();
        return redirect()->back();
    }
}
