<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ComplaintSeeder; // Assurez-vous d'importer le seeder
use Database\Seeders\MenuSeeder; // Assurez-vous d'importer le MenuSeeder si nécessaire

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appel des seeders
        $this->call([
            MenuSeeder::class,
            ComplaintSeeder::class, // Ajoutez le ComplaintSeeder ici
        ]);
    }
}
