<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsPhoneAddressCitizenIdentificationIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('citizen_identification')->after('last_name')->nullable();
            $table->string('address')->after('last_name')->nullable();
            $table->string('phone')->after('last_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('citizen_identification');
            $table->dropColumn('address');
            $table->dropColumn('phone');
        });
    }
}
