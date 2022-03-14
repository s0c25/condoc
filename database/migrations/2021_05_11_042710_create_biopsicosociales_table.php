<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiopsicosocialesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('biopsicosociales', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('tabaco')->unsigned();
      $table->bigInteger('alcohol')->unsigned();
      $table->string('observacion');
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
    Schema::dropIfExists('biopsicosociales');
  }
}
