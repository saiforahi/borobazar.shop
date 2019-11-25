<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondaryCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_cells', function (Blueprint $table) {
            $table->string('secondary_cell')->unique();
            $table->string('primary_cell');
            $table->timestamps();

            $table->primary('secondary_cell');
            $table->foreign('primary_cell')->references('cell')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secondary_cells');
    }
}
