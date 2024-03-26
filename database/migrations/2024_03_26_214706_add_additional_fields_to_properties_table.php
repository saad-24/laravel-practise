<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('annualised_return')->nullable();
            $table->double('annual_appreciation')->nullable();
            $table->double('projected_gross_yield')->nullable();
            $table->double('projected_net_yield')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('annualised_return');
            $table->dropColumn('annual_appreciation');
            $table->dropColumn('projected_gross_yield');
            $table->dropColumn('projected_net_yield');
        });
    }
}
