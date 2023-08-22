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
        Schema::create('family_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identifying_information_id')->constrained('identifying_information')->onDelete('cascade');
            $table->string('name');
            $table->string('age');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('relattion_of_client');
            $table->string('highest_educational_attainment');
            $table->string('skills');
            $table->string('occupation');
            $table->string('estimated_monthly_income');
            $table->string('source');
            $table->string('health_status');
            $table->string('remarks');
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
        Schema::dropIfExists('family_information');
    }
};
