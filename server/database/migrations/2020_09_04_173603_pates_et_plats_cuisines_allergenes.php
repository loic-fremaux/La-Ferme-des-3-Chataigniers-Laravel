<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatesEtPlatsCuisinesAllergenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pates_et_plats_cuisines_allergenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('element_id')
                ->constrained('pates_et_plats_cuisines_elements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('allergene_id')
                ->constrained('allergenes')
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
        Schema::dropIfExists('pates_et_plats_cuisines_allergnes');
    }
}
