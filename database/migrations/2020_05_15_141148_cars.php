<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nume');
            $table->string('prenume');
            $table->string('telefon');
            $table->string('email');
            $table->string('nr_masina');
            $table->string('seria');
            $table->string('marca');
            $table->string('model');
            $table->string('an');
            $table->string('combustibil');
            $table->string('km');
            $table->string('motor');
            $table->string('defect');
            $table->string('detalii_reparatii');
            $table->string('data_programare');
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
