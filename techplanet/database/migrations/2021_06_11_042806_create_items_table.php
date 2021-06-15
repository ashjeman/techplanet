<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('itemID');
            $table->string('item_brand');
            $table->string('item_model');
            $table->string('item_chipset');
            $table->float('item_price');
            $table->integer('item_available_unit');
            $table->float('item_rating');
            $table->integer('item_warranty');
            $table->text('item_desc'); //yg ni aku tambah (item description)

            //FK
            $table->foreignId('storeID')->constrained('stores');
            $table->foreignId('categoryID')->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
