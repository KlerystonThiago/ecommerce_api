<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description');
            $table->double('price', 8, 2);
            $table->boolean('highlights');
            $table->string('voltage');
            $table->integer('brand_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
