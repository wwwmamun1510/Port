<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('admin.Blogs.index', compact('blog'));
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        if($request->hasfile('blog_image'))
        {
            $file = $request->file('blog_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/blogs/', $filename);
            $blog->blog_image = $filename;
        }
        $blog->save();
        return redirect()->back()->with('status','Blog Added Successfully!!!');
    }

    public function edit($id)
    {
        $blog =  Blog::find($id);
        return view('admin.Blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        if($request->hasfile('blog_image'))
        {
            $destination = 'public/uploads/blogs/'.$blog->blog_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('blog_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/blogs/', $filename);
            $blog->blog_image = $filename;
        }

        $blog->update();
        return redirect()->back()->with('status','Blog Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $blog = Blog::find($id);
        $destination = 'public/uploads/blogs/'.$blog->blog_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $blog->delete();
        return redirect()->back()->with('status','Blog Deleted Successfully!!!');
    }


}
