<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_information_id');
            $table->string('education_level');
            $table->string('college')->nullable();
            $table->string('university')->nullable();
            $table->year('year')->nullable();
            $table->string('marks')->nullable();
            $table->string('position')->nullable();
            $table->string('attempt')->nullable();
            $table->timestamps();

            $table->foreign('personal_information_id')
            ->references('id')->on('personal_information')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_details');
    }
}
