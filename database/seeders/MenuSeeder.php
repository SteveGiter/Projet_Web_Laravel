<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée 10 menus factices en utilisant le factory
        Menu::factory()->count(10)->create();
    }
}
