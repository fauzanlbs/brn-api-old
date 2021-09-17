<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseReportExecutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_report_executions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('case_report_id');
            $table->bigInteger('koordinator_user_id');
            $table->text('korda_yang_menangani');
            $table->bigInteger('perpetrator_id');
            $table->string('status');
            $table->text('uraian_singkat');
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
        Schema::dropIfExists('case_report_executions');
    }
}
