<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('admin.Banners.index', compact('banner'));
    }

    public function store(Request $request)
    {
        $banner = new Banner;
        $banner->greetings = $request->input('greetings');
        $banner->introduction = $request->input('introduction');
        $banner->description = $request->input('description');
        if($request->hasfile('banner_image'))
        {
            $file = $request->file('banner_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/banners/', $filename);
            $banner->banner_image = $filename;
        }
        $banner->save();
        return redirect()->back()->with('status','Banner Added Successfully!!!');
    }

    public function edit($id)
    {
        $banner= Banner::find($id);
        return view('admin.Banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->greetings = $request->input('greetings');
        $banner->introduction = $request->input('introduction');
        $banner->description = $request->input('description');
        if($request->hasfile('banner_image'))
        {
            $destination = 'public/uploads/banners/'.$banner->banner_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/banners/', $filename);
            $banner->banner_image = $filename;
        }

        $banner->update();
        return redirect()->back()->with('status','Banner Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $banner = Banner::find($id);
        $destination = 'public/uploads/banners/'.$banner->banner_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $banner->delete();
        return redirect()->back()->with('status','Banner Deleted Successfully!!!');
    }
}

