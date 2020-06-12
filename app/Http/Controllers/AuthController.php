<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registerView(){
        if (Auth()->User()){
            if(Auth()->User()->role == 'user') {
                return redirect()->route('account.index');
            }else if (Auth()->User() && Auth()->User()->role == 'admin') {
                return redirect()->route('home');
            }
        }else{
            return view('auth.register');
        }
    }


    public function registration(Request $request){
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required|unique:users|regex:/(01)[0-9]{9}/',
            'password' => 'required|string|min:8|confirmed',
        ];
        $this->validate($request,$rules);
  
          User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->back()->with('success', 'Successfully account created.');
    }


    public function loginView(){
        if (Auth()->User()){
            if(Auth()->User()->role == 'user') {
                return redirect()->route('account.index');
            }else if (Auth()->User() && Auth()->User()->role == 'admin') {
                return redirect()->route('home');
            }
        }else{
            return view('auth.login');
        }
    }


    public function login(Request $request){
        $data = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if (Auth::attempt($data)) {
            if (Auth()->User() && Auth()->User()->role == 'user') {
                return redirect()->route('account.index');
            }

            if (Auth()->User() && Auth()->User()->role == 'admin') {
                return redirect()->route('home');
            }
        }else{
            return redirect()->back()->with('error', 'Email or password incorrect');
        }
        // dd($request->all());
    }


    // public function resetView(){
    //     return view('website.auth.reset');
    // }

    // public function resetPass(Request $request){
    //     $rules = [
    //         'phone' => 'required|regex:/(01)[0-9]{9}/',
    //         'password' => 'required|string|min:8',
    //     ];
    //     $this->validate($request,$rules);

    //     $form_data = array(
    //         'password' => Hash::make($request['password']),
    //     );
        

    //     $user = User::where('phone', '=', $request->phone)
    //             ->where('account_type', '!=', 'admin')
    //             ->first();
    //     if($user){
    //         User::where('phone', '=', $request->phone)->where('account_type', '!=', 'admin')->update($form_data);
    //         return redirect()->back()->with('success', 'পাসওয়ার্ড পরিবর্তন হয়েছে ।');
    //     }else{
    //         return redirect()->back()->with('error', 'মোবাইল নাম্বার সঠিক নয় ।');
    //     }
    // }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return back();
    }
}