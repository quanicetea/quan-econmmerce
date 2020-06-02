<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderOrderDetailTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__orderdetail_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('orderdetail_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['orderdetail_id', 'locale']);
            $table->foreign('orderdetail_id')->references('id')->on('order__orderdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order__orderdetail_translations', function (Blueprint $table) {
            $table->dropForeign(['orderdetail_id']);
        });
        Schema::dropIfExists('order__orderdetail_translations');
    }
}
