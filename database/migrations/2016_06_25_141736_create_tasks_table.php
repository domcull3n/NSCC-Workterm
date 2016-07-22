<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->enum('status', ['completed', 'in-progress', 'suspended'])->nullable();
            $table->longText('notes')->nullable();
            $table->integer('company_id')->unsigned();
            $table->timestamps();

            $table->foreign('company_id')->references('company_id')->on('companies');
        });

        Schema::create('task_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('task_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('task_id')->references('id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task_user');
        Schema::drop('tasks');
    }
}
