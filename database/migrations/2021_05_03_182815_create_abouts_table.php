<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('logo')->nullable();
            $table->string('vesion_app', 10)->nullable();
            $table->string('copyright')->nullable();
            $table->json('histories')->nullable();
            $table->json('organizational_regulations')->nullable();
            $table->json('tujuh_sapta_cipta')->nullable();
            $table->json('adarts')->nullable();
            $table->json('organizational_structures')->nullable();
            $table->String('playstore_url_app')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
