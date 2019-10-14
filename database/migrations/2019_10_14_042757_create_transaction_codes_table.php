<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("memo");
            $table->unsignedInteger("transaction_type_id");
            $table->integer("local_tax")->default(0);
            $table->boolean("local_tax_inclusive");
            $table->float("warning_amount")->default(0);
            $table->float("default_amount")->default(0);
            $table->string("default_source_doc");
            $table->integer("govt_tax")->default(12);
            $table->boolean("govt_tax_inclusive");
            $table->string("ledger")->nullable();
            $table->string("debit_side")->nullable();
            $table->string("credit_side")->nullable();
            $table->integer("service_charge");
            $table->string("remarks");
            $table->boolean("sub_account");
            $table->unsignedInteger("transaction_code_id");
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
        Schema::dropIfExists('transaction_codes');
    }
}
