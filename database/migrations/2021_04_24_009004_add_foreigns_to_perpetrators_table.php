<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToPerpetratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perpetrators', function (Blueprint $table) {
            $table
                ->foreign('case_report_id')
                ->references('id')
                ->on('case_reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perpetrators', function (Blueprint $table) {
            $table->dropForeign(['case_report_id']);
        });
    }
}
