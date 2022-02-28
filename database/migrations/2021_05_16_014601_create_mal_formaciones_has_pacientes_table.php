<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalFormacionesHasPacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mal_formaciones_has_pacientes', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('mal_formacione_id')->unsigned();
      $table->foreign('mal_formacione_id')->references('id')->on('mal_formaciones')->nullable();
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
    Schema::dropIfExists('mal_formaciones_has_pacientes');
  }
}
