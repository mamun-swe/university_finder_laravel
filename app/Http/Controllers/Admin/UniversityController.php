<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\University;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    // Create new University
    public function create(){
        $data = Country::orderBy('id', 'DESC')->get();
        return view('admin.university.create', compact('data'));
    }

    // Store University
    public function store(Request $request){
        $request->validate([
            'country' => 'required',
            'university_name' => 'required',
            'university_ranking' => 'required',
            'ielts_score' => 'required',
            'gre_score' => 'required',
            'tofel_score' => 'required',
            'pte_score' => 'required',
            'bachelor_cgpa' => 'required',
            'address' => 'required',
            'website_link' => 'required',
            'image' => 'required',
        ]);
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('university_images', $filename);
        
        $form_data = array(
            'country'=> $request->country,
            'university_name'=> $request->university_name,
            'university_ranking'=> $request->university_ranking,
            'ielts_score'=> $request->ielts_score,
            'gre_score'=> $request->gre_score,
            'tofel_score'=> $request->tofel_score,
            'pte_score'=> $request->pte_score,
            'bachelor_cgpa'=> $request->bachelor_cgpa,
            'address'=> $request->address,
            'website_link'=> $request->website_link,
            'image'=> $filename,
        );

        University::create($form_data);
        return redirect()->back()->with('success', 'Successfully university created .');
    }

    // University List
    public function UniversityList($id, $country){
        $data = University::where('country', '=', $id)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.university.index', compact('data', 'country'));
    }

    // Edit University
    public function editUniversity($id){
        $data = University::find($id);
        return view('admin.university.edit', compact('data'));
    }

    // Update University
    public function updateUniversity(Request $request, $id){
        $request->validate([
            'university_name' => 'required',
            'university_ranking' => 'required',
            'ielts_score' => 'required',
            'gre_score' => 'required',
            'tofel_score' => 'required',
            'pte_score' => 'required',
            'bachelor_cgpa' => 'required',
            'address' => 'required',
            'website_link' => 'required',
        ]);
        $form_data = array(
            'university_name'=> $request->university_name,
            'university_ranking'=> $request->university_ranking,
            'ielts_score'=> $request->ielts_score,
            'gre_score'=> $request->gre_score,
            'tofel_score'=> $request->tofel_score,
            'pte_score'=> $request->pte_score,
            'bachelor_cgpa'=> $request->bachelor_cgpa,
            'address'=> $request->address,
            'website_link'=> $request->website_link,
        );

        $record = University::find($id);
        $record->update($form_data);
        return redirect()->back()->with('success', 'Update successfully');
    }

    // destroy University
    public function destroyUniversity($id)
    {
        University::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}
