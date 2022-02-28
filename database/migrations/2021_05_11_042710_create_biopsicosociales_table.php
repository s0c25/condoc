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
      $table->enum("tabaco", ["Si","No"]);
      $table->enum("alcohol", ["Si","No"]);
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
