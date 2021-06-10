<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->text('comment');
            $table->string('rate')->default(0);
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });

    }





    public function down()
    {
        Schema::dropIfExists('reviews');
    }





}
