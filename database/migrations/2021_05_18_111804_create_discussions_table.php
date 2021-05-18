<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->increments('id');

            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('case_report_id')->nullable();
            $table
                ->foreign('case_report_id')
                ->references('id')
                ->on('case_reports');

            $table->boolean('private')->default(0);
            $table->string('title');
            $table->string('slug')->default('');
            $table->text('description')->nullable();
            $table->boolean('featured')->default(0);
            $table->dateTime('finished_at')->nullable();
            $table->timestamps();
        });

        Schema::create('discussion_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('discussion_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discussions');
        Schema::dropIfExists('discussion_user');
    }
}
