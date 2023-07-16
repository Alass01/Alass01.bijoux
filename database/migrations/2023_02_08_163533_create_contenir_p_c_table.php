<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenir_p_c', function (Blueprint $table) {
            $table->increments('id');
            $table->float('quantite');
            $table->float('total');

            $table->unsignedBigInteger('commandes_id');
            // $table->foreign('commandes_id')->references('id')->on('commandes');
            // $table->foreignId('commande_id')->constrained('commandes');

            $table->unsignedBigInteger('produits_id');
            // $table->foreign('produits_id')->references('id')->on('produits');
            // $table->foreignId('produit_id')->constrained('produits');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenir_p_c');
    }
};

// recuperer les donnees de lq BD sur notre site internet
// enregistrer des donnees depuis le similar_text

// pqsser une commande

// selection protrod

