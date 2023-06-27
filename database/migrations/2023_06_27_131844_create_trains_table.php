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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->dateTime('departure_station',);
            $table->dateTime('arrival_station', 50);
            $table->dateTime('departure_time', 50);
            $table->dateTime('arrival_time', 50);
            $table->string('train_code', 50);
            $table->string('number_of_carriages', 50);
            $table->string('in_time', 50);
            $table->string('deleted', 50);

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
        Schema::dropIfExists('trains');
    }
};
