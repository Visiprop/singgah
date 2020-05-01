<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OutputTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('output_types', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cart_id')->unsigned();
            $table->string('value')->nullable();
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('output_types');
    }
}
