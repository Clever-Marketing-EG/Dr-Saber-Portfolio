<?php

namespace App\Http\Controllers;

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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //TODO
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //TODO
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param Operation $operation
     * @return Response
     */
    public function edit(Operation $operation): Response
    {
        //TODO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Operation $operation
     * @return Response
     */
    public function update(Request $request, Operation $operation): Response
    {
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Operation $operation
     * @return Response
     */
    public function destroy(Operation $operation): Response
    {
        //TODO
    }
}
