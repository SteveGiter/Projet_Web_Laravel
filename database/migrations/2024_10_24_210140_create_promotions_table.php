<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('titre', 255); // Titre de la promotion
            $table->string('dates'); // Dates de la promotion
            $table->text('description')->nullable(); // Description de la promotion
            $table->string('image')->nullable(); // Chemin de l'image (nullable)
            $table->timestamps(); // Colonnes `created_at` et `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
