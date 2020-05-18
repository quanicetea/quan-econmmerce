<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('unique_id');
            $table->string('name')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->text('image')->nullable();

            $table->integer('unit_id')->unsigned();;
            $table->foreign('unit_id')->references('id')->on('unit')->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('product');
    }
}
