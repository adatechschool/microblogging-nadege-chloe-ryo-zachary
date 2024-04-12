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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //Ajout du champ foreignId pour définir la colonne user_id comme clé étrangère : elle fait référence à la colonne id de la table users
            //constrained définit la contrainte de clé étrangère
            //onDelete('cascade') permet de supprimer automatiquement les posts associés à un utilisateur supprimé
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //Ajout des champs title et content
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
