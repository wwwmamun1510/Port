<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('admin.Services.index', compact('service'));
    }

    public function store(Request $request)
    {
        $service = new Service;
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if($request->hasfile('service_image'))
        {
            $file = $request->file('service_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/services/', $filename);
            $service->service_image = $filename;
        }
        $service->save();
        return redirect()->back()->with('status','Service Added Successfully!!!');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.Services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if($request->hasfile('service_image'))
        {
            $destination = 'public/uploads/services/'.$service->service_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('service_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/services/', $filename);
            $service->service_image = $filename;
        }
        $service->update();
        return redirect()->back()->with('status','Service Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $service = Service::find($id);
        $destination = 'public/uploads/services/'.$service->service_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $service->delete();
        return redirect()->back()->with('status','Service Deleted Successfully!!!');
    }
}

