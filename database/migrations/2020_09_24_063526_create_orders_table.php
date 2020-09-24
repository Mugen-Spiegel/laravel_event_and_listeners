<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customers_id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('variants_id');
            $table->float('quantity');
            $table->text('payment_method');
            $table->float('amount');
            $table->timestamps();
            
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('variants_id')->references('id')->on('variants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
