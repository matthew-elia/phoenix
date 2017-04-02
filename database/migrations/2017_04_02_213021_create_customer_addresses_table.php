<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('label');
            $table->string('type');
            $table->string('street_address_1');
            $table->string('street_address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->boolean('default')->nullable();
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
        //
    }
}
