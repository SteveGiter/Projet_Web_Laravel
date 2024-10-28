<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    // Afficher le formulaire de création
    public function createPromotion()
    {
        return view('admin');
    }

    // Stocker une nouvelle promotion
    public function storePromotion(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'dates' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/promotions', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Création de la promotion
        Promotion::create($validatedData);

        return redirect()->route('admin')->with('success', 'Promotion ajoutée avec succès!');
    }
}
