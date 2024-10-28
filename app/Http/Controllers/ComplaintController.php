<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    // Afficher toutes les réclamations
    public function index()
    {
        $complaints = Complaint::all();
        return view('admin', compact('complaints'));
    }

    // Ajouter une nouvelle réclamation
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'details' => 'required|string',
            'status' => 'in:En attente,En cours,Résolu',
        ]);

        Complaint::create($validatedData);
        return redirect()->route('admin')->with('success', 'Réclamation ajoutée avec succès !');
    }

    // Mettre à jour le statut d'une réclamation
    public function updateStatus(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->status = $request->status;
        $complaint->save();

        return redirect()->route('admin')->with('success', 'Statut mis à jour avec succès !');
    }

    // Supprimer une réclamation
    public function destroy($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();

        return redirect()->route('admin')->with('success', 'Réclamation supprimée avec succès !');
    }
}
