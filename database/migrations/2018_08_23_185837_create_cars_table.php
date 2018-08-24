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
            $table->text('kratak_opis');
            $table->string('boja');
            $table->integer('seats');
            $table->decimal('price1h', 5,2);
            $table->decimal('price2h', 5,2);
            $table->decimal('price3h', 5,2);
            $table->decimal('price1hcost', 5,2);
            $table->decimal('price2hcost', 5,2);
            $table->decimal('price3hcost', 5,2);
            $table->integer('user_id');
            $table->string('slug')->unique()->index();
            $table->text('dugi_opis');
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
