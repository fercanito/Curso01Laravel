<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');            
            //definicion de llave foranea - restriccion directa en base de datos
            //$table->integer('message_id')->unsigned();
            //$table->foreign('message_id')->references('id')->on('messages');

            /**
             * Relaciones polimorficas -> conectarse contra mas de un modelo
             * notable_id "Sin tabla" y id de las relacion
             * notable_type Define tipo de la relacion
             */
            $table->integer('notable_id')->unsigned(); //ejemplo: id = 1
            $table->string('notable_type'); //ejemplo tabla = App\Message

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
        Schema::dropIfExists('notes');
    }
}
