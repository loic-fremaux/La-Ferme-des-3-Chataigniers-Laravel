<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatesEtPlatsCuisinesElements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pates_et_plats_cuisines_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')
                ->constrained('pates_et_plats_cuisines_groups')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('title');
            $table->integer('weight');
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pates_et_plats_cuisines_elements');
    }
}
