<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSustanciasToxicasHasPacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sustancias_toxicas_has_pacientes', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('sustancias_toxica_id')->unsigned();
      $table->foreign('sustancias_toxica_id')->references('id')->on('sustancias_toxicas')->nullable();
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
    Schema::dropIfExists('sustancias_toxicas_has_pacientes');
  }
}
