<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SddForeignKeyConstraintsOnCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function ($table) {
            $table->foreign('email_id')->references('id')->on('customer_emails')->onDelete('cascade');
            $table->foreign('phone_id')->references('id')->on('customer_phones')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('customer_addresses')->onDelete('cascade');
        });

        Schema::table('customer_emails', function ($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

        Schema::table('customer_phones', function ($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
        
        Schema::table('customer_addresses', function ($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
