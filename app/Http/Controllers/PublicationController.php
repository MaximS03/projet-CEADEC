<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $publications = Publication::all();
        return view('admin.publications.index', compact('publications'));
    }

    public function create()
    {
        return view('admin.publications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Publication::create($request->all());
        return redirect()->route('publications.index')->with('success', 'Publication créée avec succès.');
    }

    public function edit(Publication $publication)
    {
        return view('admin.publications.edit', compact('publication'));
    }

    public function update(Request $request, Publication $publication)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $publication->update($request->all());
        return redirect()->route('publications.index')->with('success', 'Publication mise à jour avec succès.');
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('publications.index')->with('success', 'Publication supprimée avec succès.');
    }
}

