<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu; // N'oubliez pas d'importer votre modèle Menu

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class; // Associez le factory avec le modèle Menu

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_menu' => $this->faker->word(), // Nom factice du menu
            'prix' => $this->faker->randomFloat(2, 5, 100), // Prix entre 5 et 100
            'quantite' => $this->faker->randomFloat(2, 1, 50), // Quantité entre 1 et 50
            'description_menu' => $this->faker->sentence(), // Description factice
            'categorie' => $this->faker->randomElement(['boisson', 'plat']), // Catégorie aléatoire
            'image' => $this->faker->imageUrl(640, 480, 'food', true, 'Faker'), // Image factice
        ];
    }
}
