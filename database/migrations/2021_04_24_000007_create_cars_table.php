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
            $table->unsignedBigInteger('car_make_id');
            $table->unsignedBigInteger('car_type_id');
            $table->unsignedBigInteger('car_fuel_id');
            $table->unsignedBigInteger('car_model_id');
            $table->unsignedBigInteger('car_color_id');
            $table->enum('status', ['active', 'lost']);
            $table->boolean('is_approved')->default(false);
            $table->string('police_number');
            $table->year('year');
            $table->boolean('isAutomatic')->default(false);
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
