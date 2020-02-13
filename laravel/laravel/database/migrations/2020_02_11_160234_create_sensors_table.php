<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mac');
            $table->string('suhu');
            $table->string('kelembaban');
            $table->string('volt');
            $table->string('amper');
            $table->string('watt');
            $table->string('kwh');
            $table->string('hertz');
            $table->string('pff');
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
        Schema::dropIfExists('sensors');
    }
}
