<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnVatPercentDeliveryFeeIntoOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->string('delivery_fee')->nullable()->after('vat');
            $table->string('vat_percent')->nullable()->after('vat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->dropColumn('vat_percent');
            $table->dropColumn('delivery_fee');
        });
    }
}
