<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        /*
        php artisan make:migration add_phone_to_messages_table --table=messages
        este comando es util cuando necesitamos agregar un nuevo campo a una tabla que esta actualmente
        en funcionamiento
        */
        Schema::table('messages', function (Blueprint $table) {
          $table->string('phone')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
          $table->dropColumn('phone');
        });
    }
}
