<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_informations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained();

            $table->string('id_card')->nullable();
            $table->string('nik_ktp')->nullable();
            $table->string('bio')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('place_of_birth', 45)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('clothes_size')->nullable();
            $table->integer('number_of_units')->nullable();
            $table->string('area_dialing_code')->nullable();
            $table->string('area')->nullable();
            $table->string('region')->nullable();

            // user company
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('siupsku_number')->nullable();
            $table->string('siupsku_image')->nullable();
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
        Schema::dropIfExists('user_personal_information');
    }
}
