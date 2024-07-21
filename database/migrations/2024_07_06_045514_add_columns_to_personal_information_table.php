<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_information', function (Blueprint $table) {
            
           // Experience table-
            $table->string('designation_1')->nullable();
            $table->string('duration_period_1')->nullable();
            $table->string('institution_1')->nullable();
            $table->string('details_1')->nullable();

            $table->string('designation_2')->nullable();
            $table->string('duration_period_2')->nullable();
            $table->string('institution_2')->nullable();
            $table->string('details_2')->nullable();

            $table->string('activities')->nullable();
            $table->string('other_achievements')->nullable();
            $table->string('languages_known')->nullable();

            // Reference Table
            $table->string('ref_name_1')->nullable();
            $table->string('ref_add_1')->nullable();
            $table->string('ref_mob_1')->nullable();
            
            $table->string('ref_name_2')->nullable();
            $table->string('ref_add_2')->nullable();
            $table->string('ref_mob_2')->nullable();

           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_information', function (Blueprint $table) {
            //
        });
    }
}
