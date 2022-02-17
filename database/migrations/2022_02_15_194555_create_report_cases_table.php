<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_cases', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('nama_rental');
            $table->string('id_brn');
            $table->string('alamat');
            $table->string('nik');
            $table->string('phone');
            $table->string('order_number');
            $table->string('korda_pelapor');
            $table->string('kronologi_kejadian');
            $table->string('unit_kendaraan');
            $table->string('data_penyewa');
            $table->string('nama_sesuai_ktp');
            $table->string('status')->default('PENDING');

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
        Schema::dropIfExists('report_cases');
    }
}
