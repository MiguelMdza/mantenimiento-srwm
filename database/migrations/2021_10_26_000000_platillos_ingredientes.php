<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlatillosIngredientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('platillos_ingredientes');
        Schema::create('platillos_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platillo_id');
            $table->foreign('platillo_id')->references('id')->on('platillos');
            $table->unsignedBigInteger('ingrediente_id');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
            $table->double('cant_usa')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platillos_ingredientes');
    }
}
