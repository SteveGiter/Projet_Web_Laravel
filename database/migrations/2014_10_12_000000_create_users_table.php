<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel');
            $table->string('town');
            $table->string('adress');
            $table->integer('pointsDeFidelete')->default(0); // Assurez-vous que cela est ajouté
            $table->enum('role', ['client', 'administrateur','gerant','employe'])->default('client'); // Exemple pour les rôles
            $table->timestamps(); // Ajoute `created_at` et `updated_at` automatiquement
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
