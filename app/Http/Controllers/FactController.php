<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FactController extends Controller
{
  public function index()
  {
      $fact = Fact::all();
      return view('admin.Facts.index', compact('fact'));
  }

  public function store(Request $request)
  {
      $fact = new Fact;
      $fact->title = $request->input('title');
      $fact->digit = $request->input('digit');
      if($request->hasfile('icon_image'))
      {
          $file = $request->file('icon_image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('public/uploads/facts/', $filename);
          $fact->icon_image = $filename;
      }
      $fact->save();
      return redirect()->back()->with('status','Fact Added Successfully!!!');
  }

  public function edit($id)
  {
      $fact =   Fact::find($id);
      return view('admin.Facts.edit', compact('fact'));
  }

  public function update(Request $request, $id)
  {
      $fact =  Fact::find($id);
      $fact->title = $request->input('title');
      $fact->digit = $request->input('digit');
      if($request->hasfile('icon_image'))
      {
          $file = $request->file('icon_image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('public/uploads/facts/', $filename);
          $fact->icon_image = $filename;
      }
      $fact->update();
      return redirect()->back()->with('status','Fact Updated Successfully!!!');
  }
 
  public function delete($id)
  {
      $fact = Fact::find($id);
      $destination = 'public/uploads/facts/'.$fact->icon_image;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
      $fact->delete();
      return redirect()->back()->with('status','Fact Deleted Successfully!!!');
  }


}
