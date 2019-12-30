<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOfferPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_offer_picture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('offer_id')->unsigned();
            $table->foreign('offer_id')->references('id')->on('shop_offers');
            $table->biginteger('picture_id')->unsigned();
            $table->foreign('picture_id')->references('id')->on('shop_pictures');
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
        Schema::dropIfExists('shop_offer_picture');
    }
}
