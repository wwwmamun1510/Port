<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class IntroductionController extends Controller
{
    public function index()
    {
        $introduction = Introduction::all();
        return view('admin.Introductions.index', compact('introduction'));
    }

    public function store(Request $request)
    {
        $introduction = new Introduction;
        $introduction->title = $request->input('title');
        $introduction->description = $request->input('description');
        $introduction->save();
        return redirect()->back()->with('status','Introduction Added Successfully!!!');
    }

    public function edit($id)
    {
        $introduction = Introduction::find($id);
        return view('admin.Introductions.edit', compact('introduction'));
    }

    public function update(Request $request, $id)
    {
        $introduction =  Introduction::find($id);
        $introduction->title = $request->input('title');
        $introduction->description = $request->input('description');
        $introduction->update();
        return redirect()->back()->with('status','Introduction Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $introduction = Introduction::find($id);
        $destination = 'public/uploads/introductions/'.$introduction->introduction_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $introduction->delete();
        return redirect()->back()->with('status','Introduction Deleted Successfully!!!');
    }
}