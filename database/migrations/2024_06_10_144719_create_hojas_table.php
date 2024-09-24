<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('entidad');
            $table->date('fecha');
            $table->string('documento');
            //$table->unsignedBigInteger('estudiante_id');
            $table->timestamps();

            // $table->foreign('estudiante_id')
            //     ->references('id')
            //     ->on('estudiantes')
            //     ->onUpdate('cascade');
            //     //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hojas');
    }
}
