<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderOrderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__order_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('order_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['order_id', 'locale']);
            $table->foreign('order_id')->references('id')->on('order__orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order__order_translations', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });
        Schema::dropIfExists('order__order_translations');
    }
}
