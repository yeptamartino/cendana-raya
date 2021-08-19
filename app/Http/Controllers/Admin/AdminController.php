<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\Constants;
use App\Models\User;
use Alert;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $admins = User::where('role', Constants::$USER_ROLE_ADMIN)
        ->orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);
        $total_admins = User::count();
        return view('admin.admins.index',compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$validation);
        $admin = new User;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->role = Constants::$USER_ROLE_ADMIN;
        $admin->password = bcrypt($request->password);

        if($request->file('photo')){
            $image_path = $request->file('photo')->path();
            $extension = $request->file('photo')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $admin->photo = $image_url;
        }

        Alert::toast('Admin berhasil ditambahkan','success');
        $admin->save();
        return redirect('admin')->with('status', 'success');

    }

    
    public function show($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.admins.show', compact('admin'));
    }
  
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.admins.edit',compact('admin'));
    }

    public function update($id, Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$validationUpdate);
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->role = Constants::$USER_ROLE_ADMIN;
        $admin->password = bcrypt($request->password);

        if($request->file('photo')){
            $image_path = $request->file('photo')->path();
            $extension = $request->file('photo')->extension();
            $image = base64_encode(file_get_contents($image_path));
            $image_url = $imageUploader->upload($image, $extension);
            $admin->photo = $image_url;
            } 

        Alert::toast('Admin berhasil diperbaharui','success');
        $admin->save();
        return redirect('admin')->with('status', 'User updated');
    }

    public function destroy(User $admin)
    {
        User::destroy($admin->id);
        Alert::toast('Admin berhasil dihapus','success');
        return redirect('admin')->with('status', 'User deleted');


    }
}
