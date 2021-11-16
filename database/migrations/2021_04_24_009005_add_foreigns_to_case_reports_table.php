<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToCaseReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('case_reports', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');

            $table
                ->foreign('car_id')
                ->references('id')
                ->on('cars');

            $table
                ->foreign('in_charge_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('case_reports', function (Blueprint $table) {
            $table->dropForeign(['car_id']);
            $table->dropForeign(['in_charge_id']);
        });
    }
}
