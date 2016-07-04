<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('apartment_number')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('type')->nullable();
            $table->longText('additional_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
