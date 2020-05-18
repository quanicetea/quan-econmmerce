<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryQuocGiaTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country__quocgia_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('quocgia_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['quocgia_id', 'locale']);
            $table->foreign('quocgia_id')->references('id')->on('country__quocgias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('country__quocgia_translations', function (Blueprint $table) {
            $table->dropForeign(['quocgia_id']);
        });
        Schema::dropIfExists('country__quocgia_translations');
    }
}
