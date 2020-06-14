<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'country', 
        'university_name', 
        'university_ranking', 
        'ielts_score', 
        'gre_score', 
        'tofel_score',
        'pte_score', 
        'bachelor_cgpa', 
        'address', 
        'website_link', 
        'image'
    ];
}
