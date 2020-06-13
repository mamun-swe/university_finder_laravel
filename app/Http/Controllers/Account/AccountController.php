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
       dd($request->all());
    }
}
