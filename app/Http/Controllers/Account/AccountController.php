<?php

namespace App\Http\Controllers\Account;

use App\Models\Country;
use App\Models\UserProfile;
use App\Models\University;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $countries = Country::all();
        $userProfile = UserProfile::where('user_id', '=', Auth()->User()->id)->first();
        if($userProfile){
            
            if($userProfile->std_language == 'ielts'){
                $matchUni = University::where('ielts_score', '<=', $userProfile->std_total_ielts_lng_score)
                        ->where('bachelor_cgpa', '<=', $userProfile->std_cgpa)
                        ->paginate(20);
                    return view('website.account.index', compact('matchUni'));
            }

            if($userProfile->std_language == 'gre'){
                $matchUni = University::where('gre_score', '<=', $userProfile->std_total_lng_score)
                            ->where('bachelor_cgpa', '<=', $userProfile->std_cgpa)
                            ->paginate(20);
                    return view('website.account.index', compact('matchUni'));
            }
            
            if($userProfile->std_language == 'tofel'){
                $matchUni = University::where('tofel_score', '<=', $userProfile->std_total_lng_score)
                        ->where('bachelor_cgpa', '<=', $userProfile->std_cgpa)
                        ->paginate(20);
                return view('website.account.index', compact('matchUni'));
            }
            
            if($userProfile->std_language == 'pte'){
                $matchUni = University::where('pte_score', '<=', $userProfile->std_total_lng_score)
                        ->where('bachelor_cgpa', '<=', $userProfile->std_cgpa)
                        ->paginate(20);
                return view('website.account.index', compact('matchUni'));
            }
           
        }else{
            return view('website.account.profile', compact('countries'));
        }
        
    }

    public function accountView(){
        $countries = Country::all();
        return view('website.account.profile', compact('countries'));
    }


    public function updateAccount(Request $request){

        UserProfile::create([
            'user_id' => Auth()->User()->id,
            'std_gender' => $request['std_gender'],
            'std_blood_grp' => $request['std_blood_grp'],
            'std_birth_date' => $request['std_birth_date'],
            'std_country' => $request['std_country'],
            'std_city' => $request['std_city'],
            'std_state' => $request['std_state'],
            'std_contact' => $request['std_contact'],
            'std_language' => $request['std_language'],
            'std_total_ielts_lng_score' => $request['std_total_ielts_lng_score'],
            'std_ielts_listening_score' => $request['std_ielts_listening_score'],
            'std_ielts_speaking_score' => $request['std_ielts_speaking_score'],
            'std_ielts_writing_score' => $request['std_ielts_writing_score'],
            'std_ielts_reading_score' => $request['std_ielts_reading_score'],
            'std_total_lng_score' => $request['std_total_lng_score'],
            'std_edu_country' => $request['std_edu_country'],
            'std_edu_intitution_name' => $request['std_edu_intitution_name'],
            'std_edu_degree_name' => $request['std_edu_degree_name'],
            'std_edu_subject_name' => $request['std_edu_subject_name'],
            'std_edu_start_date' => $request['std_edu_start_date'],
            'std_edu_end_date' => $request['std_edu_end_date'],
            'std_study_duration' => $request['std_study_duration'],
            'std_cgpa_scale' => $request['std_cgpa_scale'],
            'std_cgpa' => $request['std_cgpa'],
            'ref_faq_name' => $request['ref_faq_name'],
            'ref_faq_contact' => $request['ref_faq_contact'],
            'ref_faq_email' => $request['ref_faq_email'],
            'ref_faq_profession' => $request['ref_faq_profession'],
            'ref_faq_institution' => $request['ref_faq_institution'],
        ]);
        return response()->json('success');
    }
}
