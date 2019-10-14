<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('birth_date')->nullable();
            $table->boolean('tax_exempted')->nullable();
            $table->string('remarks')->nullable();
            $table->string('concierge')->nullable();
            $table->string('country')->nullable();
            $table->string('zip')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_no')->nullable();
            $table->string('card_exp_date')->nullable();
            $table->string('company_id')->nullable();
            $table->string('travel_agent_id')->nullable();
            $table->string('source_id')->nullable();
            $table->string('status')->default('tentative');
            $table->string('remarks')->nullable();
            $table->string('user');
            $table->integer('terminal');
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
        Schema::dropIfExists('customers');
    }
}
