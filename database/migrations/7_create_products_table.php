<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cart_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('product_name_id')->unsigned();
            $table->integer('quantity');
            $table->integer('orientation');
            $table->integer('size');
            $table->integer('duration');
            $table->text('target_audience');
            $table->text('deadline');
            $table->text('briefURL');
            $table->text('progress');
            $table->string('slug')->unique();            
            $table->integer('price');
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts')
				->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('product_name_id')->references('id')->on('product_names')
				->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('category_id')->references('id')->on('categories')
				->onUpdate('cascade')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
