<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->biginteger('id_estado');
            // $table->unsignedInteger('id_estado'); 
            // $table->foreign('id_estado')->references('id')->on('estados');
            $table->bigInteger('id_estado')->unsigned(); 
            $table->foreign('id_estado')->references('id')->on('estados')->nullable();

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
        Schema::dropIfExists('ciudades');
    }
}
