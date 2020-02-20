<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonarResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donar_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('donar_id');
            $table->string('blood_request_id');
            $table->string('blood_donated')->nullable();

            $table->timestamps();

            $table->foreign('donar_id')->references('donar_id')->on('donars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('blood_request_id')->references('blood_request_id')->on('blood_requests')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donar_responses');
    }
}
