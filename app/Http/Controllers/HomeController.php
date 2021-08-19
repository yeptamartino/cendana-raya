<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Constants;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Article;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $candidates = User::where('role', Constants::$USER_ROLE_CANDIDATE)
        ->where('status', Constants::$STATUS_CANDIDATE_PENDING)
        ->orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);

        $total_candidates = User::where('role', Constants::$USER_ROLE_CANDIDATE)
        ->where('status', Constants::$STATUS_CANDIDATE_PENDING)->count();
        return view('admin.dashboard', compact('candidates','total_candidates'));
    }
     public function dashboardUser()
    {
        $announcements = Announcement::where('status', Constants::$ARTIKEL_PUBLISH)
        ->orderBy('created_at', 'asc')->get();
        return view('admin.dashboard-user',compact('announcements'));
    }


    public function home()
    {
        return view('user.home');
    }

    public function aboutUs()
    {
        return view('user.about-us');
    }

    public function capability()
    {
        return view('user.capability');
    }

    public function inventory()
    {
        return view('user.inventory');
    }

    public function trackOrder()
    {
        return view('user.track-order');
    }

    public function contactUs()
    {
        return view('user.contact-us');
    }

}
