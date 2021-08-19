<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Helpers\ImageUploader;
use Alert;
use Illuminate\Http\Request;

class SettingController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit(Setting $setting)
    {
        $setting = Setting::latest()->first();
        return view('admin.settings.edit',compact('setting'));
    }


    public function update(Request $request, ImageUploader $imageUploader)
    {
      $request->validate(Setting::$validationUpdate);
      $setting = Setting::latest()->first();
      $setting->terms_and_conditions = $request->input('terms_and_conditions');
  
      if($request->file('logo')){
        $image_path = $request->file('logo')->path();
        $extension = $request->file('logo')->extension();
        $image = base64_encode(file_get_contents($image_path));
        $image_url = $imageUploader->upload($image, $extension);
        $setting->logo = $image_url;
        }
      Alert::toast('Pengaturan berhasil di perbaharui','success');
      $setting->save();
      return redirect()->route('pengaturan.edit');
             
             
    }
}
