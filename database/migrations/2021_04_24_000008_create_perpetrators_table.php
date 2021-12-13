<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerpetratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpetrators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('case_report_id')->nullable();
            $table->string('nik');
            $table->string('name');
            $table->string('phone_number');
            $table->mediumText('address');
            $table->string('profile_photo_path')->nullable();
            $table->mediumText('information')->nullable();

            $table->bigInteger('created_by')->nullable();

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
        Schema::dropIfExists('perpetrators');
    }
}
