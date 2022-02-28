<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('consultas', function (Blueprint $table) {
      $table->id();
      $table->biginteger('id_paciente');
      $table->timestamp('end_at');
      $table->string('observacion');
      $table->string('observacion2');
      $table->string('observacion3');
      $table->bigInteger('id_estatu')->unsigned();
      $table->foreign('id_estatu')->references('id')->on('estatus')->nullable();
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
    Schema::dropIfExists('consultas');
  }
}
