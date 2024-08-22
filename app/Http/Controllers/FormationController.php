<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $formations = Formation::all();
        return view('admin.formations.index', compact('formations'));
    }

    public function create()
    {
        return view('admin.formations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Formation::create($request->all());
        return redirect()->route('formations.index')->with('success', 'Formation créée avec succès.');
    }

    public function edit(Formation $formation)
    {
        return view('admin.formations.edit', compact('formation'));
    }

    public function update(Request $request, Formation $formation)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $formation->update($request->all());
        return redirect()->route('formations.index')->with('success', 'Formations mise à jour avec succès.');
    }

    public function destroy(Formation $formations)
    {
        $formations->delete();
        return redirect()->route('formations.index')->with('success', 'Formations supprimée avec succès.');
    }
}
