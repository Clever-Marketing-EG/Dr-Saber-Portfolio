<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class SurgeriesDashboardController extends Controller
{
    public function index()
    {
        $operations = Operation::paginate(20);
        return view('dashboard.surgeries.index', ['operations' => $operations]);
    }
    public function show(Operation $operation)
    {
        return view('dashboard.surgeries.show', ['operation' => $operation]);
    }
}
