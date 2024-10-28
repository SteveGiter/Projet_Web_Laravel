<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Nom de la table associée à ce modèle (facultatif si le nom suit la convention Laravel)
    protected $table = 'menu';

    // Clé primaire de la table
    protected $primaryKey = 'menu_id';

    // Indique que les champs `created_at` et `updated_at` doivent être gérés automatiquement par Laravel
    public $timestamps = true;

    // Colonnes modifiables en masse (mass-assignable)
    protected $fillable = [
        'nom_menu',
        'prix',
        'quantite',
        'description_menu',
        'categorie',
    ];

    // Définition des types de données (facultatif mais utile pour gérer les types des colonnes)
    protected $casts = [
        'prix' => 'decimal:2',
        'quantite' => 'decimal:2',
    ];
}
