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
        Schema::create('contenir_p_s', function (Blueprint $table) {
            $table->increments('id');
            $table->float('quantite');

            $table->unsignedBigInteger('stocks_id');
            // $table->foreign('stocks_id')->references('id')->on('stocks');

            // $table->foreignId('stock_id')->constrained('stocks');


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
        Schema::dropIfExists('contenir_p_s');
    }
};
