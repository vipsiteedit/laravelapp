<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('shop_products');
            $table->string('article')->nullable()->index();
            $table->string('barcode')->unique()->nullable();
            $table->double('stock')->nullable();
            $table->text('fulltext')->nullable();
            $table->boolean('enable')->default(true)->index();
            $table->integer('sort')->default('0')->index();
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
        Schema::dropIfExists('shop_offers');
    }
}
