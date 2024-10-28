<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id('menu_id'); // Utilisation de la clé primaire auto-incrémentée
            $table->string('nom_menu', 255); // Nom du menu
            $table->decimal('prix', 10, 2); // Prix du menu
            $table->decimal('quantite', 10, 2)->nullable(); // Quantité (nullable)
            $table->text('description_menu')->nullable(); // Description du menu (nullable)
            $table->enum('categorie', ['boisson', 'plat']); // Catégorie du menu
            $table->string('image')->nullable(); // Chemin de l'image (nullable)

            $table->timestamps(); // Ajoute les colonnes `created_at` et `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
