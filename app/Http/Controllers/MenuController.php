<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    // Fonction pour afficher le formulaire de création
    public function createMenu()
    {
        return view('admin');
    }

    
    public function Panier()
    {
        return view('panier');
    }
    // Fonction pour stocker un nouveau menu
    public function storeMenu(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_menu' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'quantite' => 'nullable|numeric',
            'description_menu' => 'nullable|string',
            'categorie' => 'required|in:boisson,plat',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/menu', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Création du menu
        Menu::create($validatedData);

        return redirect()->route('admin')->with('success', 'Menu ajouté avec succès!');
    }

    // Fonction pour afficher tous les menus
    public function index()
{
    if (!session()->has('user')) {
        return redirect()->route('connexion')->withErrors(['Accès refusé.']);
    }

    $plats = Menu::where('categorie', 'plat')->get();
    $boissons = Menu::where('categorie', 'boisson')->get();

    // Ajoutez cette ligne pour déboguer
    dd($plats, $boissons);

    return view('menu', compact('plats', 'boissons'));
}

}
