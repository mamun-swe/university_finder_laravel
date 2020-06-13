<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id', 
        'std_gender',
        'std_blood_grp',
        'std_birth_date',
        'std_country',
        'std_city',
        'std_state',
        'std_contact',

        'std_language',

        'std_total_ielts_lng_score',
        'std_ielts_listening_score',
        'std_ielts_speaking_score',
        'std_ielts_writing_score',
        'std_ielts_reading_score',
        'std_total_lng_score',

        'std_edu_country',
        'std_edu_intitution_name',
        'std_edu_degree_name',
        'std_edu_subject_name',
        'std_edu_start_date',
        'std_edu_end_date',
        'std_study_duration',
        'std_cgpa_scale',
        'std_cgpa',
        'ref_faq_name',
        'ref_faq_contact',
        'ref_faq_email',
        'ref_faq_profession',
        'ref_faq_institution'
    ];
}
