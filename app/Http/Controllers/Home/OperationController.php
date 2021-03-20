<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
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
        $operations = Operation::paginate(15);
        return view('operations.index', ['operations' => $operations]);
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
