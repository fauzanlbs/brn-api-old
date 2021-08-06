<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donation_id')->constrained();
            $table->string('name');
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('prayer')->nullable();
            $table->integer('nominal');
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
        Schema::dropIfExists('donation_users');
    }
}
