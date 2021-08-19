<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $videos = VideoGallery::all();
        return view('admin.video-galleries.index',compact('videos'));
    }


    public function create()
    {
        return view('admin.video-galleries.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(VideoGallery::$validation);
        $video = new VideoGallery;
        $video->url_youtube = $request->url_youtube;
    
        $video->save();

        return redirect('video')->with('status', 'success');

    }

    
    public function show(VideoGallery $video)
    {
        return view('admin.video-galleries.show', compact('video'));
    }

  
    public function edit(VideoGallery $video)
    {
        return view('admin.video-galleries.edit',compact('video'));
    }

  
    public function update($id,Request $request, ImageUploader $imageUploader)
    {
        $request->validate(VideoGallery::$validationUpdate);
        $video = VideoGallery::findOrFail($id);
        $video->url_youtube = $request->url_youtube;
        $video->save();
        return redirect('video')->with('status', 'VideoGallery updated');
    }

   
    public function destroy(VideoGallery $video)
    {
        VideoGallery::destroy($video->id);
        return redirect('video')->with('status', 'VideoGallery deleted');


    }
}
