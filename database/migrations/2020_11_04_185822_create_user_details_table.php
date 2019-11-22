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
            $table->Integer('blood_group')->nullable();
            $table->string('blood_organization')->nullable();
            $table->string('sex')->nullable();
            $table->string('district_id');
            $table->string('subdistrict_id')->nullable();
            $table->date('last_donation_date')->nullable();
            $table->string('NID')->unique()->nullable();
            $table->string('passport_no')->unique()->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('relegion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('secondary_email')->nullable();
            $table->timestamps();

            $table->primary('user_cell');
            $table->foreign('user_cell')->references('cell')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subdistrict_id')->references('id')->on('sub_districts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('blood_group')->references('id')->on('blood_groups')->onDelete('cascade')->onUpdate('cascade');
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
