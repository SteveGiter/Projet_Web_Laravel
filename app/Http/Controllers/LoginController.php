<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Utilisé pour comparer les mots de passe
use App\Models\User; // Assurez-vous d'importer correctement votre modèle User

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('connexion'); // Vue de la page de connexion (connexion.blade.php)
    }

    public function login(Request $request)
    {
        // Validation des données du formulaire de connexion
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Récupérer l'utilisateur en fonction du nom d'utilisateur
        $user = User::where('username', $credentials['username'])->first();

        // Vérification de l'utilisateur et du mot de passe
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Stocker les informations de l'utilisateur dans la session
            $request->session()->put('user', [
                'id' => $user->id,
                'username' => $user->username,
                'role' => $user->role, // Supposons que le modèle User ait un champ "role"
            ]);

            // Rediriger l'utilisateur en fonction de son rôle
            if ($user->role === 'administrateur') {
                return redirect()->route('admin'); // Redirige vers la page admin si l'utilisateur est admin
            }
            if ($user->role === 'employe') {
                return redirect()->route('employe'); // Redirige vers la page employé
            }
            if ($user->role === 'gerant') {
                return redirect()->route('gerant'); // Redirige vers la page gérant
            } else {
                return redirect()->route('menu'); // Redirige vers la page menu pour les autres utilisateurs
            }
        }

        // Si la connexion échoue, retourner une erreur
        return back()->withErrors([
            'login' => 'Les informations d’identification fournies ne correspondent pas à nos enregistrements.',
        ])->withInput();
    }
}