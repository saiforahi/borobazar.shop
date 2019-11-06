<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->string('blood_request_id')->unique()->primary();
            $table->string('name');
            $table->string('relation');
            $table->string('cell');
            $table->string('blood_group');
            $table->string('quantity');
            $table->string('patient_age');
            $table->string('district');
            $table->string('donation_place');
            $table->string('donation_date');
            $table->string('about_patient')->nullable();
            $table->timestamps();

            $table->foreign('district')->references('bengali_name')->on('districts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
}
