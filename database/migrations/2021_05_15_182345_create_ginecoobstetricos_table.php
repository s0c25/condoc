<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGinecoobstetricosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ginecoobstetricos', function (Blueprint $table) {
      $table->id();
      $table->string('anteceInfeccion');
      $table->string('gestas');
      $table->string('paras');
      $table->string('abortos');
      $table->string('cesareas');
      $table->string('ee');
      $table->string('etg');
      $table->string('fum');
      $table->string('gestacional');
      $table->string('gestacionalPrimera');
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
    Schema::dropIfExists('ginecoobstetricos');
  }
}
