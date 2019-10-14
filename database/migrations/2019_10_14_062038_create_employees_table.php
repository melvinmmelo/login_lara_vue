<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string("last_name");
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("position");
            $table->string("license_no")->nullable();
            $table->string("commission")->nullable();
            $table->string("company")->nullable();
            $table->string("car_model")->nullable();
            $table->string("car_brand")->nullable();
            $table->string("plate_no")->nullable();
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
        Schema::dropIfExists('employees');
    }
}
