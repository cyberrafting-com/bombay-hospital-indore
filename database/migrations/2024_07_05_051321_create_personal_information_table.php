<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();

           
            $table->string('name');
            $table->string('dob');
            $table->string('permanent_address')->nullable();
            $table->string('current_address')->nullable(); 
            $table->string('marital_status')->nullable();    
            $table->string('spouse_details')->nullable();   
            $table->string('mobile');
            $table->string('email');
            $table->string('medical_registration')->nullable(); 
            $table->string('state');
            $table->string('remuneration')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
}
