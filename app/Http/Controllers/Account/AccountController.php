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
        dd($request->all());

    }
}
