<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create main table product
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->nullable();
            $table->timestamps();
        });
        // Create table product variations
        Schema::create('product_variations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->text('description')->nullable();
            $table->float('price')->nullable();
            $table->string('sku')->nullable();
            $table->integer('weight')->nullable();
            $table->timestamps();
        });
        // Create table product images
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
        });
        // Create table product images connect
        Schema::create('variations_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('variation_id')->nullable();
            $table->integer('image_id')->nullable();
            $table->integer('weight')->nullable();
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
        //
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_variations');
        Schema::dropIfExists('images');
        Schema::dropIfExists('variations_images');
    }
}
