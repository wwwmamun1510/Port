<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.Contacts.index', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->title = $request->input('title');
        $contact->description = $request->input('description');
        $contact->country = $request->input('country');
        $contact->address = $request->input('address');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->save();
        return redirect()->back()->with('status','Contact Added Successfully!!!');
    }

    public function edit($id)
    {
        $contact =  Contact::find($id);
        return view('admin.Contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->title = $request->input('title');
        $contact->description = $request->input('description');
        $contact->country = $request->input('country');
        $contact->address = $request->input('address');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->update();
        return redirect()->back()->with('status','Contact Updated Successfully!!!');
    }
   
    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('status','Contact Deleted Successfully!!!');
    }


}
