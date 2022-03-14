<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pacientes', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('lastname');
      $table->string('phone');
      $table->string('ocupacion');
      $table->string('direccion');
      $table->string('edoCivil');
      $table->string('plantilla');
      $table->biginteger('cedula');
      $table->biginteger('id_estado');
      $table->biginteger('id_ciudad');
      $table->biginteger('id_biopsicosociales')->unsigned();
      $table->foreign('id_biopsicosociales')->references('id')->on('biopsicosociales')->nullable();
      $table->bigInteger('id_embarazo')->unsigned();
      $table->foreign('id_embarazo')->references('id')->on('embarazos')->nullable();
      $table->bigInteger('id_ginecoobstetrico')->unsigned();
      $table->foreign('id_ginecoobstetrico')->references('id')->on('ginecoobstetricos')->nullable();
      $table->biginteger('edad');

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
    Schema::dropIfExists('pacientes');
  }
}
