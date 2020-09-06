<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_type_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('home_address');
            $table->string('specialization');
            $table->string('brief_history');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('doctor_type_id')->references('id')->on('doctor_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
