<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('type'); // Exemple : "Technique", "Académique", "Administratif"
            $table->text('details');
            $table->enum('status', ['En attente', 'En cours', 'Résolu'])->default('En attente');
            $table->timestamps(); // Inclut `created_at` et `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
