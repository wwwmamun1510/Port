<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.Testimonials.index', compact('testimonial'));
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->testimonial_name = $request->input('testimonial_name');
        $testimonial->description = $request->input('description');
        $testimonial->designation = $request->input('designation');
        if($request->hasfile('testimonial_image'))
        {
            $file = $request->file('testimonial_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/testimonials/', $filename);
            $testimonial->testimonial_image = $filename;
        }
        $testimonial->save();
        return redirect()->back()->with('status','Testimonial Added Successfully!!!');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.Testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->testimonial_name = $request->input('testimonial_name');
        $testimonial->description = $request->input('description');
        $testimonial->designation = $request->input('designation');
        if($request->hasfile('testimonial_image'))
        {
            $destination = 'public/uploads/testimonials/'.$testimonial->testimonial_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('testimonial_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/testimonials/', $filename);
            $testimonial->testimonial_image = $filename;
        }

        $testimonial->update();
        return redirect()->back()->with('status','Testimonial Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $testimonial = Testimonial::find($id);
        $destination = 'public/uploads/testimonials/'.$testimonial->testimonial_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $testimonial->delete();
        return redirect()->back()->with('status','Testimonial Deleted Successfully!!!');
    }
}

    

  

