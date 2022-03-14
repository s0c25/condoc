<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadCronicaPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedad_cronica_pacientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('enfermedadCronica_id')->unsigned();
            $table->foreign('enfermedadCronica_id')->references('id')->on('enfermedad_cronicas')->nullable();
            $table->bigInteger('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->nullable();
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
        Schema::dropIfExists('enfermedad_cronica_pacientes');
    }
}
