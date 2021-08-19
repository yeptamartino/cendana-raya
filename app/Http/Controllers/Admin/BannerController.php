<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\Constants;
use App\Models\Banner;
use Alert;
use Illuminate\Http\Request;

class BannerController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);
        $total_banners = Banner::count();
        return view('admin.banners.index',compact('banners'));
    }


    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(Banner::$validation);
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = Constants::$BANNER_PUBLISH;
        if($request->file('thumbnail')){
            $image_path = $request->file('thumbnail')->path();
            $extension = $request->file('thumbnail')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $banner->thumbnail = $image_url;
            }
        Alert::toast('Banner berhasil di tambahkan','success');
        $banner->save();

        return redirect('banner')->with('status', 'success');

    }

    
    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.show', compact('banner'));
    }

  
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit',compact('banner'));
    }

  
    public function update($id, Request $request, ImageUploader $imageUploader)
    {
        $request->validate(Banner::$validationUpdate);
        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = Constants::$BANNER_PUBLISH;
        if($request->file('thumbnail')){
            $image_path = $request->file('thumbnail')->path();
            $extension = $request->file('thumbnail')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $banner->thumbnail = $image_url;
            }
        Alert::toast('Banner berhasil di update','success');
        $banner->save();
        return redirect('banner')->with('status', 'Banner updated');
    }

    public function draft($id, Request $request)
    {
        $banner = Banner::findOrFail($id);
        $banner->status = Constants::$BANNER_DRAFT;
        $banner->save();
        Alert::toast('Banner berhasil di draftkan','success');
        return redirect()->back();
    }

    public function publish($id, Request $request)
    {
        $banner = Banner::findOrFail($id);
        $banner->status = Constants::$BANNER_PUBLISH;
        $banner->save();
        Alert::toast('Banner berhasil di publish','success');
        return redirect()->back();
    }

   
    public function destroy(Banner $banner)
    {
        Banner::destroy($banner->id);
        return redirect('banner')->with('status', 'Banner deleted');


    }
}
