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
        Schema::create('family_planning_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identifying_information_id')->constrained('identifying_information')->onDelete('cascade');
            $table->string('practicing_family_planning');
            $table->string('practicing_family_planning_if_yes')->nullable();
            $table->string('practicing_family_planning_if_no')->nullable();
            $table->string('nature_of_employment');
            $table->string('sss')->comment('For - Social Security System/GSIS/Private Insurance')->nullable();
            $table->string('gsis')->comment('For - Social Security System/GSIS/Private Insurance')->nullable();
            $table->string('others')->comment('For - Social Security System/GSIS/Private Insurance')->nullable();
            $table->string('housing')->comment('For - Describe housing and other living condition');
            $table->string('use_and_source_of_portable_water')->comment('For - Describe housing and other living condition');
            $table->string('light')->comment('For - Describe housing and other living condition');
            $table->string('toilet')->comment('For - Describe housing and other living condition');
            $table->string('kitchen')->comment('For - Describe housing and other living condition');
            $table->string('recreactional_activity')->comment('For - Describe the social/culture activity of the client');
            $table->string('religious_spiritual_activity')->comment('For - Describe the social/culture activity of the client');
            $table->string('physical_needs')->comment('For - Describe the self functioning of client');
            $table->string('groom_and_personal_hygiene')->comment('For - Describe the self functioning of client');
            $table->string('problem_solving')->comment('For - Describe the self functioning of client');
            $table->string('decision_making')->comment('For - Describe the self functioning of client');
            $table->string('his_family')->comment('For - Describe the roles platform by the client in relation to the following');
            $table->string('community')->comment('For - Describe the roles platform by the client in relation to the following');
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
        Schema::dropIfExists('family_planning_information');
    }
};
