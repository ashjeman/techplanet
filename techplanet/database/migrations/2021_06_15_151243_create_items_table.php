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
            $table->id();
            $table->string('item_name');
            $table->string('item_chipset');
            $table->string('item_price');
            $table->integer('item_available_unit');
            $table->float('item_rating');
            $table->integer('item_warranty');
            $table->text('item_desc'); //yg ni aku tambah (item descripion) - acap
            $table->string('item_img');
            $table->foreignId('storeID')->constrained('stores');
            $table->foreignId('categoryID')->constrained('categories');
            $table->string('item_link');
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
        Schema::dropIfExists('items');
    }
}
