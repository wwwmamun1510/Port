<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AreaController extends Controller
{
    public function index()
    {
        $area = Area::all();
        return view('admin.Areas.index', compact('area'));
    }

    public function store(Request $request)
    {
        $area = new Area;
        if($request->hasfile('area_image'))
        {
            $file = $request->file('area_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/areas/', $filename);
            $area->area_image = $filename;
        }
        $area->save();
        return redirect()->back()->with('status','Area Added Successfully!!!');
    }

    public function edit($id)
    {
        $area = Area::find($id);
        return view('admin.Areas.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $area = Area::find($id);
        if($request->hasfile('area_image'))
        {
            $destination = 'public/uploads/areas/'.$area->area_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('area_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/areas/', $filename);
            $area->area_image = $filename;
        }

        $area->update();
        return redirect()->back()->with('status','Area Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $area = Area::find($id);
        $destination = 'public/uploads/areas/'.$area->area_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $area->delete();
        return redirect()->back()->with('status','Area Deleted Successfully!!!');
    }

}
