<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use App\Models\Constants;
use App\Models\User;
use Alert;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $candidates = User::where('role', Constants::$USER_ROLE_CANDIDATE)
        ->orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);
        $total_candidates = User::count();
        return view('admin.candidates.index',compact('candidates'));
    }

    public function create()
    {
        return view('admin.candidates.create');
    }

    public function store(Request $request, ImageUploader $imageUploader)
    {
        $request->validate(User::$validation);
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
        
        return redirect('calon-peserta')->with('status', 'success');

    }

    
    public function show($id)
    {
        $candidate = User::findOrFail($id);
        return view('admin.candidates.show', compact('candidate'));
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

    public function banned($id, Request $request) 
    {
        $candidate = User::findOrFail($id);
        $candidate->status = Constants::$STATUS_CANDIDATE_PENDING;
        $candidate->save();
        Alert::toast('Calon peserta berhasil di banned','success');
        return redirect()->back();
    }

    public function approved($id, Request $request)
    {
        $candidate = User::findOrFail($id);
        $candidate->status = Constants::$STATUS_CANDIDATE_APPROVED;
        $candidate->save();
        Alert::toast('Calon peserta berhasil di aktifkan','success');
        return redirect()->back();
    }

    
    public function verifyMultiple(Request $request) {      
        $submit_verifikasi = $request->input('submit_verifikasi');
        $selected_candidates = $request->input('selected_candidates');
        
        if($selected_candidates) {

          $candidates = User::whereIn('id', $selected_candidates);
  
          if($candidates) {
            if($submit_verifikasi === 'Setujui') {
              $candidates->update([
                'status' => Constants::$STATUS_CANDIDATE_APPROVED,
              ]);
            }

            if($submit_verifikasi === 'Tolak') {
                $candidates->update([
                  'status' => Constants::$STATUS_CANDIDATE_PENDING,
                ]);
            }
            
          }
        }
        
        Alert::toast('Calon peserta berhasil di setujui','success');
        return redirect()->back();
      }


    public function destroy(User $candidate)
    {
        User::destroy($candidate->id);
        Alert::toast('Calon peserta berhasil di hapus','success');
        return redirect('calon-peserta')->with('status', 'User deleted');


    }
}
