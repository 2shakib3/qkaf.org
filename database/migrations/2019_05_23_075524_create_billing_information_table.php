<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donation_type');
            $table->string('currency');
            $table->float('amount');
            $table->string('name_title');
            $table->string('fristname');
            $table->string('lastname');
            $table->string('email');
            $table->string('address');
            $table->string('address_2');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->integer('phone');
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
        Schema::dropIfExists('billing_information');
    }
}
