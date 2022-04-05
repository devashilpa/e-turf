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
        Schema::create('addturves', function (Blueprint $table) {
            $table->id();
            $table->string('turf_name');
            $table->string('location');
            $table->biginteger('rate');
            $table->string('manager')->unique();
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
        Schema::dropIfExists('addturves');
    }
};
