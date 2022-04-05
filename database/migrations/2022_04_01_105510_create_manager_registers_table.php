<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->biginteger('contact_number');
            $table->string('email');
            $table->string('gender');
            $table->string('user_name');
            $table->string('password');
            $table->string('turf')->default('not assigned');
            $table->string('status')->default('not defined');
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
        Schema::dropIfExists('manager_registers');
    }
};
