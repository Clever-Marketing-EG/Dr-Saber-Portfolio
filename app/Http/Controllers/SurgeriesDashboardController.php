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
    public function update(Request $request, Operation $operation)
    {
        $validated = $request->validate([
            'title' => 'min:3|string',
            'title_ar' => 'min:3|string',
            'content' => 'min:3|text',
            'content_ar' => 'min:3|text'


        ]);
        $operation->update($validated);
        return redirect()->route('dashboard.surgeries.index');
    }
    public function edit(Operation $operation)
    {
        return view('dashboard.surgeries.edit', ['operation' => $operation]);
    }
      /**
     * @param Operation $article
     * @return RedirectResponse
     */
    public function destroy(Operation $operation)
    {
        $operation->delete();
        return redirect()->back();
    }
}
