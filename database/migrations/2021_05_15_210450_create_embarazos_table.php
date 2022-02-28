<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbarazosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('embarazos', function (Blueprint $table) {
      $table->id();
      $table->string('embarazo');
      $table->string('feto');
      $table->string('situacion');
      $table->string('presentacion');
      $table->string('posicion');
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
    Schema::dropIfExists('embarazos');
  }
}
