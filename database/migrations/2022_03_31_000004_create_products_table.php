<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 50);
            $table->foreignId('manufacturer_id')->references('id')->on('manufacturers');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->float('product_price',6,2);
            $table->integer('product_rating')->nullable();
            $table->string('product_description', 400)->nullable();
            $table->string('picture_1', 50)->default('defaultPicture');
            $table->string('picture_2', 59)->default('defaultPicture');
            $table->string('picture_3', 50)->default('defaultPicture');
            $table->string('picture_4', 50)->default('defaultPicture');
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
        Schema::dropIfExists('products');
    }
};
