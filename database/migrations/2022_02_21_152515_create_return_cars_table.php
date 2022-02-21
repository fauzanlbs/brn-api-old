<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('korda_pelapor');
            $table->string('unit_kendaraan');
            $table->string('data_penyewa');
            $table->string('koordinator_team');
            $table->string('korda_yang_menangani');
            $table->string('uraian_singkat');
            $table->string('case_report_id');


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
        Schema::dropIfExists('return_cars');
    }
}
