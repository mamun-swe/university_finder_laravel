<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('std_gender');
            $table->string('std_blood_grp');
            $table->string('std_birth_date');
            $table->string('std_country');
            $table->string('std_city');
            $table->string('std_state');
            $table->string('std_contact');
            $table->string('std_language');

            $table->string('std_total_ielts_lng_score')->nullable();
            $table->string('std_ielts_listening_score')->nullable();
            $table->string('std_ielts_speaking_score')->nullable();
            $table->string('std_ielts_writing_score')->nullable();
            $table->string('std_ielts_reading_score')->nullable();
            $table->string('std_total_lng_score')->nullable();

            $table->string('std_edu_country');
            $table->string('std_edu_intitution_name');
            $table->string('std_edu_degree_name');
            $table->string('std_edu_subject_name');
            $table->string('std_edu_start_date');
            $table->string('std_edu_end_date');
            $table->string('std_study_duration');
            $table->string('std_cgpa_scale');
            $table->string('std_cgpa');
            $table->string('ref_faq_name');
            $table->string('ref_faq_contact');
            $table->string('ref_faq_email');
            $table->string('ref_faq_profession');
            $table->string('ref_faq_institution');
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
        Schema::dropIfExists('user_profiles');
    }
}
