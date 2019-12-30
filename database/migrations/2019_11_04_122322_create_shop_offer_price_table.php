<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOfferPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_offer_price', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('offer_id')->unsigned();
            $table->foreign('offer_id')->references('id')->on('shop_offers');
            $table->integer('price_id')->unsigned();
            $table->foreign('price_id')->references('id')->on('shop_prices');
            $table->double('price')->default(0.00);
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
        Schema::dropIfExists('shop_offer_price');
    }
}
