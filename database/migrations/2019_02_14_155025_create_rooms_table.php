<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('beds');
            $table->integer('cupboards');
            $table->integer('desks');
            $table->boolean('balcony');//
            $table->boolean('elevator');//
            $table->boolean('microwave');//
            $table->boolean('auto_washer');//
            $table->boolean('tv');//
            $table->boolean('ac'); //
            $table->boolean('wifi'); //
            $table->boolean('smoking'); //
            $table->boolean('noise'); //
            $table->boolean('sleep_early'); //
            $table->boolean('coming_over'); //
            $table->boolean('food_sharing'); //
            $table->boolean('ac_lover'); //
            $table->integer('rent');
            $table->string('city');
            $table->integer('rate'); //
            $table->string('address');
            $table->string('image');
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
        Schema::dropIfExists('rooms');
    }
}
