<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('orientation')->nullable();
            $table->string('size')->nullable();
            $table->integer('duration')->nullable();
            $table->text('target_audience')->nullable();
            $table->string('style')->nullable();
            $table->string('tone')->nullable();
            $table->string('brief')->nullable();
            $table->string('pattern')->nullable();
            $table->string('output')->nullable();
            $table->text('deadline')->nullable();
            $table->integer('status')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

            // $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
