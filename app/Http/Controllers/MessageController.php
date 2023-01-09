<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all();
        return view('admin.Messages.index', compact('message'));
    }

    public function store(Request $request)
    {
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return redirect()->back()->with('status','Message Added Successfully!!!');
    }

    public function edit($id)
    {
        $message =  Message::find($id);
        return view('admin.Messages.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->update();
        return redirect()->back()->with('status','Message Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with('status','Message Deleted Successfully!!!');
    }


}

