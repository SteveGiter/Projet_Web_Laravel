<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Complaint; // Vérifiez que le modèle est bien importé

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer 50 plaintes fictives
        Complaint::factory()->count(50)->create();
    }
}
