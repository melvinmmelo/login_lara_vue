<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->integer("adult_capacity");
            $table->integer("child_capacity");
            $table->integer("no_bed");
            $table->integer("floor");
            $table->string("direction")->nullable();
            $table->boolean("available")->default(1);
            $table->string("type")->default("single");
            $table->string("remarks")->nullable();
            $table->string("status")->default("clean");
            $table->string("user");
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
        Schema::dropIfExists('rooms');
    }
}
