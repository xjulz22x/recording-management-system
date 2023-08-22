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
        Schema::create('assesment_and_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identifying_information_id')->constrained('identifying_information')->onDelete('cascade');
            $table->longText('problem_presented_by_client');
            $table->longText('initial_assesment_of_the_problem');
            $table->string('to_improve_economic_condition_functioning')->nullable()->comment('REHABILITATION GOAL');
            $table->string('to_improve_social_functioning')->nullable()->comment('REHABILITATION GOAL');
            $table->string('to_overcome_presented_crisis')->nullable()->comment('REHABILITATION GOAL');
            $table->string('to_correct_manifested_social_deviance')->nullable()->comment('REHABILITATION GOAL');
            $table->string('to_develop_desired_attitudes_and_capabilities')->nullable()->comment('REHABILITATION GOAL');
            $table->string('to_improve_handicapping_condition')->nullable()->comment('REHABILITATION GOAL');
            $table->string('other_rehabilitation_goals')->nullable()->comment('REHABILITATION GOAL');
            $table->longText('other_rehabilitation_goals_specify')->nullable()->comment('REHABILITATION GOAL');
            $table->longText('recommendation');
            $table->longText('plan_of_action');
            $table->string('valid_id')->nullable();
            $table->string('certificate_of_indigency')->nullable();
            $table->string('death_certificate')->nullable();
            $table->string('funeral_contract')->nullable();
            $table->string('signature_of_client')->nullable();
            $table->string('signature_of_worker')->nullable();
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
        Schema::dropIfExists('assesment_and_uploads');
    }
};
