<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->string('customer_phone')->nullable();
            $table->string('customer_firstname')->nullable();
            $table->string('customer_lastname')->nullable();
            $table->string('email')->nullable();
            $table->integer('status')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('vat')->nullable();
            $table->float('total')->nullable();
            $table->string('address')->nullable();
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
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
        Schema::dropIfExists('order');
    }
}
