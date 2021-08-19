<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $contact_us = ContactUs::all();
        return view('admin.contact-us.index',compact('contact_us'));
    }


    public function create()
    {
        return view('admin.contact-us.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {

        $contact = new ContactUs([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
          ]);

          $contact->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
          $contact->save();

        return redirect('contact')->with('status', 'success');

    }

    
    public function show(ContactUs $contact)
    {
        return view('admin.contact-us.show', compact('contact'));
    }

  
    public function edit(ContactUs $contact)
    {
        return view('admin.contact-us.edit',compact('contact'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->title = $request->title;
        $contact->description = $request->description;

        if($request->file('thumbnail')) {
            $contact->thumbnail    = $imageUploader->saveImage($request, 'thumbnail');
          }
        $contact->save();
        return redirect('contact')->with('status', 'ContactUs updated');
    }

   
    public function destroy(ContactUs $contact)
    {
        ContactUs::destroy($contact->id);
        return redirect('contact')->with('status', 'ContactUs deleted');


    }
}
