<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\University;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $data = Country::orderBy('id', 'DESC')->get();
        $universities = University::orderBy('university_ranking', 'ASC')->take(3)->get();
        return view('website.index', compact('data', 'universities'));
    }


    public function university(){
        $universities = University::orderBy('university_ranking', 'ASC')->paginate(12);
        return view('website.university', compact('universities'));
    }


    public function guildeline(){
        return view('website.guildeline');
    }


    public function contact(){
        return view('website.contact');
    }


    public function privacy(){
        return view('website.privacy');
    }
}
