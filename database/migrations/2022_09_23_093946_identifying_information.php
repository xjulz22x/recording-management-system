<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('identifying_information', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->string('case_number');
            $table->string('new_old');
            $table->string('date');
            $table->string('name_of_client');
            $table->string('contact');
            $table->string('address');
            $table->string('birth_date');
            $table->string('age');
            $table->string('birth_place');
            $table->string('religion');
            $table->string('occupation');
            $table->string('educational_attainment');
            $table->string('name_of_nearest_relatives');
            $table->string('address_of_nearest_relatives');
            $table->string('if_youth')->nullable();
            $table->string('housing');
            $table->string('estimated_loss_or_damage')->nullable();
            $table->string('if_client_is_disabled')->nullable();
            $table->string('client_sought_outside_assistance');
            $table->string('client_sought_outside_assistance_if_yes_type_of_assistance')->nullable();
            $table->string('client_sought_outside_assistance_source')->nullable();
            $table->string('client_sought_outside_assistance_date')->nullable();
            $table->string('client_sought_outside_assistance_source_of_referral')->nullable();
            $table->string('burial_status')->nullable();
            $table->string('medical_status')->nullable();
            $table->string('student_assistance_status')->nullable();
            $table->string('transportation_status')->nullable();
            $table->string('archive_status')->nullable();
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
         Schema::dropIfExists('identifying_information');
    }
};
