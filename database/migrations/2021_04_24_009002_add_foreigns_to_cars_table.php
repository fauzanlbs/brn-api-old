<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');

            $table
                ->foreign('car_make_id')
                ->references('id')
                ->on('car_makes');

            $table
                ->foreign('car_type_id')
                ->references('id')
                ->on('car_types');

            $table
                ->foreign('car_fuel_id')
                ->references('id')
                ->on('car_fuels');

            $table
                ->foreign('car_model_id')
                ->references('id')
                ->on('car_models');

            $table
                ->foreign('car_color_id')
                ->references('id')
                ->on('car_colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['car_make_id']);
            $table->dropForeign(['car_type_id']);
            $table->dropForeign(['car_fuel_id']);
            $table->dropForeign(['car_model_id']);
            $table->dropForeign(['car_color_id']);
        });
    }
}
