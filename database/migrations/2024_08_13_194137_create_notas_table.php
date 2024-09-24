<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('postulante');
            $table->decimal('nota1', 5, 2);
            $table->decimal('nota2', 5, 2);
            $table->decimal('nota3', 5, 2);
            $table->decimal('nota4', 5, 2);
            $table->decimal('nota5', 5, 2);
            $table->decimal('nota6', 5, 2);
            $table->decimal('nota7', 5, 2);
            $table->decimal('tema', 5, 2);
            $table->decimal('interaccion', 5, 2);
            $table->decimal('respuestas', 5, 2);
            $table->decimal('total1', 5, 2);
            $table->decimal('total2', 5, 2);

            // $table->foreingId('docente_id')->constrained('docentes')->onDelete('cascade');
            

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
        Schema::dropIfExists('notas');
    }
}
