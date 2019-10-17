<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('guest_id');
            $table->string('transaction_code');
            $table->string('source');
            $table->string('ref_no');
            $table->integer('nights')->default(1);
            $table->string('rate_type');
            $table->float('amount');
            $table->float('tax');
            $table->float('service_charge');
            $table->float('gross_amount');
            $table->float('net_amount');
            $table->float('balance');
            $table->float('discount')->default(0);
            $table->float('net_base')->default(0);
            $table->timestamps();
            $table->string('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_transactions');
    }
}
