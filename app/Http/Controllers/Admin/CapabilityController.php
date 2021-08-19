<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Capability;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $capabilitys = Capability::all();
        return view('admin.capabilities.index',compact('capabilitys'));
    }


    public function create()
    {
        return view('admin.capabilities.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {

        $capability = new Capability([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
          ]);

          $capability->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
          $capability->save();

        return redirect('capability')->with('status', 'success');

    }

    
    public function show(Capability $capability)
    {
        return view('admin.capabilities.show', compact('capability'));
    }

  
    public function edit(Capability $capability)
    {
        return view('admin.capabilities.edit',compact('capability'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $capability = Capability::findOrFail($id);
        $capability->title = $request->title;
        $capability->description = $request->description;

        if($request->file('thumbnail')) {
            $capability->thumbnail    = $imageUploader->saveImage($request, 'thumbnail');
          }
        $capability->save();
        return redirect('capability')->with('status', 'Capability updated');
    }

   
    public function destroy(Capability $capability)
    {
        Capability::destroy($capability->id);
        return redirect('capability')->with('status', 'Capability deleted');


    }
}
