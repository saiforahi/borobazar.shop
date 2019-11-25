<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donars', function (Blueprint $table) {
            $table->string('donar_cell');
            $table->Integer('blood_group')->nullable();
            $table->string('blood_organization')->nullable();
            $table->string('district_id')->nullable();
            $table->string('available')->default('yes');
            $table->date('last_donation_date')->nullable();
            $table->timestamps();

            $table->primary('donar_cell');
            $table->foreign('donar_cell')->references('cell')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('blood_group')->references('id')->on('blood_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donars');
    }
}
