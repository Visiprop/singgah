<?php

use App\Product;
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
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('invoice_id')->nullable();
            $table->integer('product_id')->unsigned();            
            $table->integer('quantity')->nullable();
            $table->string('orientation')->nullable();
            $table->string('size')->nullable();
            $table->string('duration')->nullable();            
            $table->string('deadline')->nullable();
            $table->integer('status')->nullable();                                 
            $table->string('price')->nullable(); 
            $table->timestamps();

            $table->foreign('user_id','invoice_id', 'product_id')->references('id','id','id')->on('users','invoices', 'products');
            
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
