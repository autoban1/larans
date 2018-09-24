<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('brand');
            $table->string('year');
//            $table->text('short_description');
//            $table->string('color');
//            $table->integer('seats');
            $table->decimal('price1h', 5,2);
            $table->decimal('price1hcost', 5,2);
            $table->integer('owner_user_id');
            $table->text('long_description');
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
        Schema::dropIfExists('cars');
    }
}
