<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'tel' => 'required|string',
            'email' => 'required|email',
            'town' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'role' => 'string|in:client,administrateur,gerant,employe',
        ]);

        // Vérifier si l'utilisateur existe déjà par email ou par nom d'utilisateur
        $userExists = User::where('email', $validatedData['email'])
                        ->orWhere('username', $validatedData['username'])
                        ->exists();

        if ($userExists) {
            // Redirection avec un message d'erreur
            return back()->withErrors(['email' => 'Ce compte existe déjà.']);
        }

        // Création et enregistrement de l'utilisateur
        $user = new User;
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']); // Hash du mot de passe
        $user->tel = $validatedData['tel'];
        $user->email = $validatedData['email'];
        $user->town = $validatedData['town'];
        $user->adress = $validatedData['adress'];
        $user->role = $validatedData['role'] ?? 'client'; // Valeur par défaut 'client'

        
        // Enregistrer l'utilisateur
        $user->save();

        // Redirection ou retour avec un message de succès
        return back()->with('success', 'Compte créé.');
    }
}
