<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Istoric extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric', function (Blueprint $table) {
            $table->id();
            $table->string('nr_masina');
            $table->string('nume_client');
            $table->string('prenume_client');
            $table->string('data_programare');
            $table->string('defect');
            $table->string('detalii');
            $table->string('mecanic');
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
        Schema::drop('cars');
    }
}
