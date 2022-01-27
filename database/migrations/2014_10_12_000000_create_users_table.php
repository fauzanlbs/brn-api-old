<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->boolean('is_survey')->default(false);
            $table->tinyInteger('status_level_diklat')->default(0);
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('profile_photo_path')->nullable();
            $table->string('password_helper_key')->nullable();
            $table->text('reason_for_inactivity')->nullable();
            $table->tinyInteger('payment_status')->default(0);
            $table->string('payment_code')->nullable();
            $table->string('status')->default('registration'); // expired|registration|approved
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
        Schema::dropIfExists('users');
    }
}
