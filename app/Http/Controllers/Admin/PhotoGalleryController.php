<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $photos = PhotoGallery::all();
        return view('admin.photo-galleries.index',compact('photos'));
    }


    public function create()
    {
        return view('admin.photo-galleries.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {

        $photo = new PhotoGallery([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
          ]);

          $photo->thumbnail = $imageUploader->saveImage($request, 'thumbnail');
          $photo->save();

        return redirect('admin/photo')->with('status', 'success');

    }

    
    public function show(PhotoGallery $photo)
    {
        return view('admin.photo-galleries.show', compact('photo'));
    }

  
    public function edit(PhotoGallery $photo)
    {
        return view('admin.photo-galleries.edit',compact('photo'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $photo = PhotoGallery::findOrFail($id);
        $photo->title = $request->title;
        $photo->description = $request->description;

        if($request->file('thumbnail')) {
            $photo->thumbnail    = $imageUploader->saveImage($request, 'thumbnail');
          }
        $photo->save();
        return redirect('admin/photo')->with('status', 'PhotoGallery updated');
    }

   
    public function destroy(PhotoGallery $photo)
    {
        PhotoGallery::destroy($photo->id);
        return redirect('admin/photo')->with('status', 'PhotoGallery deleted');


    }
}
