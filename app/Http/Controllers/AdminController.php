<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Importez le modèle User
use Illuminate\Support\Facades\Hash; // Pour le hachage du mot de passe

class AdminController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'tel' => 'required|string|max:15',
            'town' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'role' => 'required|string|in:client,administrateur,gerant,employe',
        ]);

        // Création de l'utilisateur
        $employee = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // Hachage du mot de passe
            'tel' => $validated['tel'],
            'town' => $validated['town'],
            'adress' => $validated['adress'],
            'role' => $validated['role'],
        ]);

        return redirect()->back()->with('success', 'Employé ajouté avec succès !');
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'tel' => 'required|string|max:15',
            'town' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'role' => 'required|string|in:client,administrateur,gerant,employe',
        ]);

        // Mise à jour de l'utilisateur
        $employee = User::findOrFail($id);
        $employee->update($validated);

        return redirect()->back()->with('success', 'Employé mis à jour avec succès !');
    }

    public function destroy($id)
    {
        // Suppression de l'utilisateur
        $employee = User::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('success', 'Employé supprimé avec succès !');
    }
}

