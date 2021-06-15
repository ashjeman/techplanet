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
            $table->date('order_date');
            $table->integer('tracking_no');
            $table->integer('quantity');
            $table->float('total_price');

            //FK
            $table->foreignId('itemID')->constrained('items');
            $table->foreignId('custID')->constrained('users');
            $table->foreignId('storeID')->constrained('stores');
            $table->foreignId('courierID')->constrained('couriers');
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
        Schema::dropIfExists('orders');
    }
}
