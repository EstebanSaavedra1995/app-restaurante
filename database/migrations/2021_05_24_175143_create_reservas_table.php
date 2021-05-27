<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->timestamps('hora');
            $table->timestamps('fecha');
            
            
            /* relacion uno a muchos con estados */
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');

            /* relacion uno a muchos con mesas */
            $table->unsignedBigInteger('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesas');

            /* relacion uno a muchos con usuarios */
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            /* relacion uno a muchos con turnos */
            $table->unsignedBigInteger('turno_id');
            $table->foreign('turno_id')->references('id')->on('turnos');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
