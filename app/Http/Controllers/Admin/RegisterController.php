<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\Constants;
use App\Models\User;
use Alert;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$register);
        $candidate = new User;
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->address = $request->address;
        $candidate->role = Constants::$USER_ROLE_CANDIDATE;
        $candidate->status = Constants::$STATUS_CANDIDATE_PENDING;
        $candidate->password = bcrypt($request->password);

        if($request->file('photo')){
            $image_path = $request->file('photo')->path();
            $extension = $request->file('photo')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $candidate->photo = $image_url;
        }
    
        $candidate->save();
        Alert::toast('Registrasi Berhasil, Silahkan Login','success');
        return redirect()->route('login');

    }

    public function edit($id)
    {
        $candidate = User::findOrFail($id);
        return view('admin.candidates.edit',compact('candidate'));
    }

    public function update($id, Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$validationUpdate);
        $candidate = User::findOrFail($id);
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->address = $request->address;
        $candidate->role = Constants::$USER_ROLE_CANDIDATE;
        $candidate->status = Constants::$STATUS_CANDIDATE_PENDING;
        $candidate->password = bcrypt($request->password);

        if($request->file('photo')){
            $image_path = $request->file('photo')->path();
            $extension = $request->file('photo')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $candidate->photo = $image_url;
            }

        $candidate->save();
        
        return redirect('calon-peserta')->with('status', 'User updated');
    }


}
