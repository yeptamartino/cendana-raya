<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\Constants;
use App\Models\User;
use Alert;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       
        return view('admin.profiles.index');
    }

    public function create()
    {
        return view('admin.profiles.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$validation);
        $profile = new User;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->role = Constants::$USER_ROLE_CANDIDATE;
        $profile->status = Constants::$STATUS_CANDIDATE_PENDING;
        $profile->password = bcrypt($request->password);

        if($request->file('photo')){
            $image_path = $request->file('photo')->path();
            $extension = $request->file('photo')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $profile->photo = $image_url;
        }
    
        $profile->save();
        Alert::toast('Profile berhasil ditambahkan','success');
        return redirect('profile')->with('status', 'success');

    }

    
    public function show($id)
    {
        $profile = User::findOrFail($id);
        return view('admin.profiles.show', compact('profile'));
    }
  
    public function edit($id)
    {
        $profile = User::findOrFail($id);
        return view('admin.profiles.edit',compact('profile'));
    }

    public function update($id, Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$validationUpdate);
        $profile = User::findOrFail($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->role = Constants::$USER_ROLE_CANDIDATE;
        $profile->status = Constants::$STATUS_CANDIDATE_PENDING;
        $profile->password = bcrypt($request->password);

        if($request->file('photo')){
            $image_path = $request->file('photo')->path();
            $extension = $request->file('photo')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $profile->photo = $image_url;
            }

        $profile->save();
        Alert::toast('Profile berhasil diperbaharui','success');
        return redirect('profile')->with('status', 'User updated');
    }


}
