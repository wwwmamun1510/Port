<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;


class EducationController extends Controller
{
    public function index()
    {
        $education = Education::all();
        return view('admin.Educations.index', compact('education'));
    }

    public function store(Request $request)
    {
        $education  = new Education ;
        $education ->education_type = $request->input('education_type');
        $education ->percentage = $request->input('percentage');
        $education ->year = $request->input('year');
        $education ->save();
        return redirect()->back()->with('status','Education  Added Successfully!!!');
    }

    public function edit($id)
    {
        $education  =  Education::find($id);
        return view('admin.Educations.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $education = Education::find($id);
        $education ->education_type = $request->input('education_type');
        $education ->percentage = $request->input('percentage');
        $education ->year = $request->input('year');
        $education->update();
        return redirect()->back()->with('status','Education Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->back()->with('status','Education Deleted Successfully!!!');
    }


}


