<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->string('user_cell')->unique();
            $table->string('blood_group');
            $table->string('blood_organization')->nullable();
            $table->string('sex')->nullable();
            $table->string('district_id');
            $table->string('subdistrict_id')->nullable();
            $table->string('last_donation_date');
            $table->timestamps();

            $table->primary('user_cell');
            $table->foreign('user_cell')->references('cell')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subdistrict_id')->references('id')->on('sub_districts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
