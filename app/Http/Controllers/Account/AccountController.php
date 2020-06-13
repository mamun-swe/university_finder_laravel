<?php

namespace App\Http\Controllers\Account;

use App\Models\Country;
use App\Models\UserProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $countries = Country::all();
        $userProfile = UserProfile::where('user_id', '=', Auth()->User()->id)->first();
        return view('website.account.index', compact('countries','userProfile'));
    }


    public function updateAccount(Request $request){
        $rules = [
            'std_gender' => 'required',
            'std_blood_grp' => 'required',
            'std_birth_date' => 'required',
            'std_country' => 'required',
            'std_city' => 'required',
            'std_state' => 'required',
            'std_contact' => 'required',
            'std_language' => 'required'
        ];
        $this->validate($request,$rules);

    }
}
