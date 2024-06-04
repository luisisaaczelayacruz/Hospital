<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('hour');
            $table->date('date');
            $table->string('address');
            $table->integer('patients_id')->unsigned();
            $table->foreign('patients_id')->references('id')-> on ('patients')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('doctors_id')->unsigned();
            $table->foreign('doctors_id')->references('id')->on ('doctors')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_visits');
    }
};
