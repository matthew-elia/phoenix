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
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('label');
            $table->string('type');
            $table->string('street_address_primary');
            $table->string('street_address_secondary')->nullable();
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
