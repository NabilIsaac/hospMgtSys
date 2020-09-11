<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable();
            $table->foreignId('nurse_id')->nullable();
            $table->foreignId('room_id')->nullable();
            $table->foreignId('ward_id')->nullable();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->enum('gender', ['female', 'male'])->default('male');
            $table->string('age')->nullable();
            $table->string('created_by');
            $table->string('insurance')->nullable();
            $table->enum('status', ['admission', 'discharged', 'consultation', 'emergency'])->nullable()->default('consultation');
            $table->string('next_of_kin')->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced'])->default('single');
            $table->string('disease')->nullable();
            $table->string('home_address');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
