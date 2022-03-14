<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalformacionPacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('malformacion_pacientes', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('nombremalformacion_id')->unsigned();
      $table->foreign('nombremalformacion_id')->references('id')->on('nombremalformacions')->nullable();
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
    Schema::dropIfExists('malformacion_pacientes');
  }
}
