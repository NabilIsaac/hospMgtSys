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
            // $table->foreignId('doctor_id')->nullable();
            $table->foreignId('nurse_id')->nullable();
            $table->foreignId('room_id')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->enum('gender', ['female', 'male'])->default('male');
            $table->string('age')->nullable();
            $table->string('insurance')->nullable();
            $table->enum('status', ['consultation', 'discharged', 'admission', 'emergency'])->nullable()->default('consultation');
            $table->string('next_of_kin')->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced'])->default('single');
            $table->string('disease')->nullable();
            $table->string('home_address');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
