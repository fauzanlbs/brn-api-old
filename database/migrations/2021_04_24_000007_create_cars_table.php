<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('stnk_image')->nullable();
            $table->string('machine_number');
            $table->string('chassis_number');
            $table->unsignedBigInteger('car_make_id')->nullable();
            $table->unsignedBigInteger('car_type_id')->nullable();
            $table->unsignedBigInteger('car_fuel_id')->nullable();
            $table->unsignedBigInteger('car_model_id')->nullable();
            $table->unsignedBigInteger('car_color_id')->nullable();
            $table->enum('status', ['active', 'lost'])->default('active');
            $table->boolean('is_approved')->default(false);
            $table->string('police_number');
            $table->year('year');
            $table->boolean('is_automatic')->default(false);
            $table->tinyInteger('capacity');
            $table->text('equipment')->nullable();

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
        Schema::dropIfExists('cars');
    }
}
