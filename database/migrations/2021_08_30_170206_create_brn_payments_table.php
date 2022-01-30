<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrnPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brn_payments', function (Blueprint $table) {
            $table->id();
            // $table->string('transaction_code'); // register-brn, donation, olshop
            $table->integer('paymentable_id');
            $table->morphs('paymentable');
            $table->integer('amount');
            $table->integer('korda')->nullable();
            $table->integer('korwil')->nullable();
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
        Schema::dropIfExists('brn_payments');
    }
}
