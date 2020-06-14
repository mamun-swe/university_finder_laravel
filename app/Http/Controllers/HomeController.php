<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Country;
use App\Models\University;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = User::where('role', '=', 'admin')->count();
        $user = User::where('role', '=', 'user')->count();
        $country = Country::count();
        $university = University::count();
        return view('admin.home', compact('admin', 'user', 'country', 'university'));
    }
}
