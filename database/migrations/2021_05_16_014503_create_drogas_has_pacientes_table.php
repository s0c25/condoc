<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrogasHasPacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('drogas_has_pacientes', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('droga_id')->unsigned();
      $table->foreign('droga_id')->references('id')->on('drogas')->nullable();
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
    Schema::dropIfExists('drogas_has_pacientes');
  }
}
