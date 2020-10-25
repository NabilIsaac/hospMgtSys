<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
        $table->id();
        $table->foreignId('doctor_id');
        $table->foreignId('patient_id');
        $table->date('appointment_date');
        $table->string('appointment_description')->nullable();
        $table->timestamps();
        $table->softDeletes();
        
        $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
