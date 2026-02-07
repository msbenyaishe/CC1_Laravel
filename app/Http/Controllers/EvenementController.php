<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Expert;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = Evenement::all();
        return view('evenements.index', compact('evenements'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evenement = Evenement::with('expert', 'ateliers')->findOrFail($id);
        return view('evenements.show', compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evenement = Evenement::findOrFail($id);
        $experts = Expert::all();

        return view('evenements.edit', compact('evenement', 'experts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'description' => 'required',
            'cout_journalier' => 'required|numeric',
            'expert_id' => 'required|exists:experts,id',
        ]);

        $evenement = Evenement::findOrFail($id);

        $evenement->update([
            'theme' => $request->theme,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'description' => $request->description,
            'cout_journalier' => $request->cout_journalier,
            'expert_id' => $request->expert_id,
        ]);

        return redirect()->route('evenements.index')
            ->with('success', 'Événement mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Evenement::findOrFail($id)->delete();

        return redirect()->route('evenements.index')
            ->with('success', 'Événement supprimé avec succès');
    }
}
