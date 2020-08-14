<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_code')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('email')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('vat')->nullable();
            $table->float('total')->nullable();
            $table->string('address')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('order_admin');
    }
}
