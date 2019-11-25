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
            $table->string('patient_name');
            $table->string('submitted_by')->nullable();
            $table->string('relation_with_patient');
            $table->string('contact_no');
            $table->Integer('blood_group');
            $table->string('quantity');
            $table->string('patient_age')->nullable();
            $table->string('district_id');
            $table->string('donation_place');
            $table->date('donation_date');
            $table->string('about_patient')->nullable();
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('blood_group')->references('id')->on('blood_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('submitted_by')->references('donar_cell')->on('donars')->onDelete('cascade')->onUpdate('cascade');
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
