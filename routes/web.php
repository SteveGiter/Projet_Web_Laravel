<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ComplaintController;

// Route de la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour afficher le formulaire d'inscription
Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

// Autres routes statiques
Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/help', function () {
    return view('help');
})->name('help');

// Route pour soumettre le formulaire d'inscription
Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');

// Page de connexion
Route::get('/connexion', [LoginController::class, 'showLoginForm'])->name('connexion');

// Validation de la connexion
Route::post('/connexion', [LoginController::class, 'login'])->name('login.submit');

// Groupement des routes pour l'administration
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        if (session()->has('user') && session('user.role') === 'administrateur') {
            return view('admin');
        }
        return redirect()->route('connexion')->withErrors(['Accès refusé.']);
    })->name('admin.index');

    Route::get('/create', [MenuController::class, 'createMenu'])->name('admin.create');
    Route::post('/store', [MenuController::class, 'storeMenu'])->name('admin.store');

    // Routes pour gérer les employés
    Route::post('/employees', [AdminController::class, 'store'])->name('employees.store');
    Route::put('/employees/{id}', [AdminController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{id}', [AdminController::class, 'destroy'])->name('employees.destroy');

    // Routes pour les promotions
    Route::get('/promotions/create', [PromotionController::class, 'createPromotion'])->name('promotions.create');
    Route::post('/promotions/store', [PromotionController::class, 'storePromotion'])->name('promotions.store');

    // Routes pour les plaintes
    Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
    Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');
    Route::patch('/complaints/{id}/status', [ComplaintController::class, 'updateStatus'])->name('complaints.updateStatus');
    Route::delete('/complaints/{id}', [ComplaintController::class, 'destroy'])->name('complaints.destroy');
});

// Route de la page gérant
Route::get('/gerant', function () {
    if (session()->has('user') && session('user.role') === 'gerant') {
        return view('gerant');
    }
    return redirect()->route('connexion')->withErrors(['Accès refusé.']);
})->name('gerant');

// Route de la page employé
Route::get('/employe', function () {
    if (session()->has('user') && session('user.role') === 'employe') {
        return view('employe');
    }
    return redirect()->route('connexion')->withErrors(['Accès refusé.']);
})->name('employe');

// Page du menu accessible après connexion
Route::get('/menu', function () {
    if (session()->has('user')) {
        $role = session('user.role');

        if ($role === 'administrateur') {
            return redirect()->route('admin');
        }
        if ($role === 'gerant') {
            return redirect()->route('gerant');
        }
        if ($role === 'employe') {
            return redirect()->route('employe');
        }

        return view('menu'); // Si l'utilisateur n'est pas admin, gerant ou employe
    }

    return redirect()->route('connexion'); // Redirige vers la page de connexion si non connecté
})->name('menu');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// Assurez-vous que cette route est présente

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/panier', action: function () {
    return view('panier');
})->name('panier');

Route::get('/panier', [ MenuController::class, 'Panier'])->name('panier');

Route::get('/profil', action: function () {
    return view('profil');
})->name('profil');

