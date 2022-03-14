<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalFormacionesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mal_formaciones', function (Blueprint $table) {
      $table->id();
      $table->string('descripcion');
      $table->bigInteger('formacione_id')->unsigned();
      $table->foreign('formacione_id')->references('id')->on('formaciones')->nullable()->onDelete('cascade');
      $table->bigInteger('id_nombremalformacion')->unsigned();
      $table->foreign('id_nombremalformacion')->references('id')->on('nombremalformacions')->nullable();
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
    Schema::dropIfExists('mal_formaciones');
  }
}
