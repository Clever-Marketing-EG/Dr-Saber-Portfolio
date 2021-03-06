<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Operation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $operations = Operation::orderBy('created_at', 'desc')->paginate(15);
        $images = Image::loadImages();
        return view('operations.index', ['operations' => $operations, 'images' => $images]);
    }

    /**
     * Display the specified resource.
     *
     * @param Operation $operation
     * @return View
     */
    public function show(Operation $operation): View
    {
        return view('operations.show', ['operation' => $operation]);
    }

}
