<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('patentes', function (Blueprint $table) {
      $table->id('id')->unique();
      $table->timestamps();
      $table->string('nomeTecnologia');
      $table->string('setorEconomico');
      $table->string('area');
      $table->string('categoria');
      $table->longText('sinopsePatente');
      $table->string('tipoPatente');
      $table->string('pct')->nullable(true);
      $table->bigInteger('inpi')->unique();
      $table->longText('resumo');
      $table->longText('solucaoProblema');
      $table->longText('vantagem');
      $table->longText('aplicacao');
      $table->smallInteger('trl');
      $table->bigInteger('telefone');
      $table->string('email');
      $table->string('link')->nullable(true);
      $table->date('criacao');
      $table->string('criadores');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('patentes');
  }
}
