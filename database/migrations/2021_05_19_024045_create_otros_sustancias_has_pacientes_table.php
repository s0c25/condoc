<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtrosSustanciasHasPacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('otros_sustancias_has_pacientes', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('otros_toxicos_id');
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
    Schema::dropIfExists('otros_sustancias_has_pacientes');
  }
}
