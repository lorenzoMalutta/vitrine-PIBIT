<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidiasTable extends Migration
{
    public function up()
    {
        Schema::create('midias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image')->nullable(true);
            $table->string('video')->nullable(true);
            $table->string('pdf')->nullable(true);
            $table->unsignedBigInteger('idPatente')->unique();
            $table->foreign('idPatente')->references('id')->on('patentes')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('midias', function (Blueprint $table){
            $table->foreign('idPatente')->constrained()->onDelete('cascade');
        });
    }
}
