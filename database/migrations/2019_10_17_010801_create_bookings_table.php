<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('guest_id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('company_id')->nullable();
            $table->datetime('arrived_at');
            $table->datetime('departure_at');
            $table->integer('no_adult');
            $table->integer('no_child');
            $table->string('guest_type')->default('personal');
            $table->string('gift_cheque')->nullable();
            $table->string('status')->default('reserved');
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
