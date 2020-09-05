<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatesEtPlatsCuisinesIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pates_et_plats_cuisines_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('element_id')
                ->constrained('pates_et_plats_cuisines_elements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('ingredient_id')
                ->constrained('ingredients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pates_et_plats_cuisines_ingredients');
    }
}
