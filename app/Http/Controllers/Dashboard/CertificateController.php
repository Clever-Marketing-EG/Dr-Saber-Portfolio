<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Certificate;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $certificates = Certificate::orderBy('created_at', 'desc')->get();
        return view('dashboard.certificates.index', ['certificates' => $certificates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $path = $request->image->store('certificates_images');
        $certificate = new Certificate();
        $certificate->title = $request['title'];
        $certificate->title_ar = $request['title_ar'];
        $certificate->image_url = asset($path);
        $certificate->save();

        return redirect()->route('certificates.index')->with('success', 'Certificate added successfully');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Certificate $certificate
     * @return RedirectResponse
     */
    public function update(Request $request, Certificate $certificate): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $path = $request->image->store('certificates_images');
        $certificate->title = $request['title'];
        $certificate->title_ar = $request['title_ar'];
        $certificate->image_url = asset($path);
        $certificate->save();

        return redirect()->route('certificates.index')->with('success', 'Certificate added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Certificate $certificate
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Certificate $certificate): RedirectResponse
    {
        $certificate->delete();
        return redirect()->back()->with('warning', 'Certificate deleted successfully');
    }
}
