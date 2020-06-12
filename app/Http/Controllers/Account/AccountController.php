<?php

namespace App\Http\Controllers\Account;

use App\Models\UserProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $userProfile = UserProfile::where('user_id', '=', Auth()->User()->id)->first();
        return view('website.account.index', compact('userProfile'));
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
