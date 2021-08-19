<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Constants;
use App\Models\Announcement;
use Alert;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);
        $total_announcements = Announcement::count();
        return view('admin.announcements.index',compact('announcements','total_announcements'));
    }


    public function create()
    {
        return view('admin.announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate(Announcement::$validation);
        $announcement = new Announcement;
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->status = Constants::$ARTIKEL_PUBLISH;
    
        $announcement->save();

        return redirect('pengumuman')->with('status', 'success');

    }

    
    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcements.show', compact('announcement'));
    }

  
    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcements.edit',compact('announcement'));
    }

  
    public function update($id, Request $request)
    {
        $request->validate(Announcement::$validationUpdate);
        $announcement = Announcement::findOrFail($id);
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->status = Constants::$ARTIKEL_PUBLISH;

        $announcement->save();
        Alert::toast('Pengumuman berhasil di update','success');
        return redirect('pengumuman')->with('status', 'Announcement updated');
    }

    public function draft($id, Request $request)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->status = Constants::$ARTIKEL_DRAFT;
        $announcement->save();
        Alert::toast('Pengumuman berhasil di draftkan','success');

        return redirect()->back();
    }

    public function publish($id, Request $request)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->status = Constants::$ARTIKEL_PUBLISH;
        $announcement->save();
        Alert::toast('Pengumuman berhasil di publish','success');
        return redirect()->back();
    }

   
    public function destroy(Announcement $announcement)
    {
        Announcement::destroy($announcement->id);
        Alert::toast('Pengumuman berhasil di hapus','success');
        return redirect('pengumuman')->with('status', 'Announcement deleted');


    }
}
